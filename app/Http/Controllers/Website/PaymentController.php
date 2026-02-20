<?php

namespace App\Http\Controllers\Website; // Changed from 'website' to 'Website'

use App\Http\Controllers\Controller;
use App\Models\Course;
use App\Models\Enrollment;
use Illuminate\Http\Request;
use Stripe\Stripe;
use Stripe\Checkout\Session;
use Illuminate\Support\Facades\Auth;

class PaymentController extends Controller
{
    public function __construct()
    {
        Stripe::setApiKey(env('STRIPE_SECRET'));
    }

    public function checkout(Course $course)
    {
        // Check if user is already enrolled
        if ($course->isUserEnrolled(Auth::id())) {
            return redirect()->back()->with('error', 'You are already enrolled in this course!');
        }

        // Create Stripe Checkout Session
        $session = Session::create([
            'payment_method_types' => ['card'],
            'line_items' => [[
                'price_data' => [
                    'currency' => 'usd',
                    'product_data' => [
                        'name' => $course->title,
                        'description' => $course->description,
                    ],
                    'unit_amount' => $course->price * 100, // Stripe uses cents
                ],
                'quantity' => 1,
            ]],
            'mode' => 'payment',
            'success_url' => route('payment.success', ['course' => $course->id]) . '?session_id={CHECKOUT_SESSION_ID}',
            'cancel_url' => route('payment.cancel', $course->id),
            'metadata' => [
                'course_id' => $course->id,
                'user_id' => Auth::id(),
            ],
        ]);

        return redirect($session->url);
    }

    public function success(Request $request, Course $course)
    {
        $sessionId = $request->get('session_id');

        if (!$sessionId) {
            return redirect()->route('web.courses.show', $course->slug)->with('error', 'Invalid payment session');
        }

        try {
            // Retrieve the session from Stripe
            $session = Session::retrieve($sessionId);

            // Check if payment was successful
            if ($session->payment_status === 'paid') {
                // Create enrollment
                $enrollment = Enrollment::create([
                    'user_id' => Auth::id(),
                    'course_id' => $course->id,
                    'payment_intent_id' => $session->payment_intent,
                    'amount' => $course->price,
                    'currency' => $session->currency,
                    'status' => 'completed',
                    'payment_details' => [
                        'session_id' => $sessionId,
                        'customer_email' => $session->customer_details->email ?? null,
                    ],
                ]);

                return redirect()->route('web.courses.show', $course->slug)
                    ->with('success', 'Congratulations! You have successfully enrolled in the course!');
            }
        } catch (\Exception $e) {
            return redirect()->route('web.courses.show', $course->slug)
                ->with('error', 'Payment verification failed: ' . $e->getMessage());
        }

        return redirect()->route('web.courses.show', $course->slug)
            ->with('error', 'Payment was not successful. Please try again.');
    }

    public function cancel(Course $course)
    {
        return redirect()->route('web.courses.show', $course->slug)
            ->with('info', 'Payment was cancelled. You can try again anytime.');
    }
}
