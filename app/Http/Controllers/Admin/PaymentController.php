<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Enrollment;
use App\Models\Course;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class PaymentController extends Controller
{
    public function index(Request $request)
    {
        $query = Enrollment::with(['user', 'course'])
            ->latest();

        // Filter by status
        if ($request->has('status') && $request->status != 'all') {
            $query->where('status', $request->status);
        }

        // Filter by date range
        if ($request->has('date_from') && $request->date_from) {
            $query->whereDate('created_at', '>=', $request->date_from);
        }
        if ($request->has('date_to') && $request->date_to) {
            $query->whereDate('created_at', '<=', $request->date_to);
        }

        // Search by user or course
        if ($request->has('search') && $request->search) {
            $search = $request->search;
            $query->where(function ($q) use ($search) {
                $q->whereHas('user', function ($userQuery) use ($search) {
                    $userQuery->where('name', 'like', "%{$search}%")
                        ->orWhere('email', 'like', "%{$search}%");
                })->orWhereHas('course', function ($courseQuery) use ($search) {
                    $courseQuery->where('title', 'like', "%{$search}%");
                });
            });
        }

        $payments = $query->paginate(20)->withQueryString();

        // Statistics
        $totalRevenue = Enrollment::where('status', 'completed')->sum('amount');
        $totalPayments = Enrollment::where('status', 'completed')->count();
        $pendingPayments = Enrollment::where('status', 'pending')->count();
        $failedPayments = Enrollment::where('status', 'failed')->count();

        // Today's revenue
        $todayRevenue = Enrollment::where('status', 'completed')
            ->whereDate('created_at', today())
            ->sum('amount');

        // This month's revenue
        $monthRevenue = Enrollment::where('status', 'completed')
            ->whereMonth('created_at', now()->month)
            ->whereYear('created_at', now()->year)
            ->sum('amount');

        // Revenue by course
        $revenueByCourse = Enrollment::where('status', 'completed')
            ->select('course_id', DB::raw('count(*) as total_enrollments'), DB::raw('sum(amount) as total_revenue'))
            ->with('course')
            ->groupBy('course_id')
            ->orderBy('total_revenue', 'desc')
            ->take(10)
            ->get();

        return view('admin.payments.index', compact(
            'payments',
            'totalRevenue',
            'totalPayments',
            'pendingPayments',
            'failedPayments',
            'todayRevenue',
            'monthRevenue',
            'revenueByCourse'
        ));
    }

    public function show(Enrollment $enrollment)
    {
        $enrollment->load(['user', 'course', 'course.instructor']);

        return view('admin.payments.show', compact('enrollment'));
    }



    public function coursePayments(Course $course)
    {
        $payments = Enrollment::with(['user'])
            ->where('course_id', $course->id)
            ->latest()
            ->paginate(15);

        $totalEarned = Enrollment::where('course_id', $course->id)
            ->where('status', 'completed')
            ->sum('amount');

        $enrollmentCount = Enrollment::where('course_id', $course->id)
            ->where('status', 'completed')
            ->count();

        return view('admin.payments.course', compact('course', 'payments', 'totalEarned', 'enrollmentCount'));
    }

    public function export(Request $request)
    {
        $query = Enrollment::with(['user', 'course'])
            ->where('status', 'completed');

        // Apply filters
        if ($request->has('date_from') && $request->date_from) {
            $query->whereDate('created_at', '>=', $request->date_from);
        }
        if ($request->has('date_to') && $request->date_to) {
            $query->whereDate('created_at', '<=', $request->date_to);
        }

        $payments = $query->get();

        $csvData = [];
        $csvData[] = ['ID', 'User', 'Email', 'Course', 'Amount', 'Currency', 'Payment Intent', 'Date', 'Status'];

        foreach ($payments as $payment) {
            $csvData[] = [
                $payment->id,
                $payment->user->name ?? 'N/A',
                $payment->user->email ?? 'N/A',
                $payment->course->title ?? 'N/A',
                $payment->amount,
                $payment->currency,
                $payment->payment_intent_id,
                $payment->created_at->format('Y-m-d H:i:s'),
                $payment->status
            ];
        }

        $filename = 'payments_export_' . now()->format('Y-m_d') . '.csv';

        return response()->streamDownload(function () use ($csvData) {
            $file = fopen('php://output', 'w');
            foreach ($csvData as $row) {
                fputcsv($file, $row);
            }
            fclose($file);
        }, $filename, [
            'Content-Type' => 'text/csv',
        ]);
    }
}
