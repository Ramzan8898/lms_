<?php

namespace App\Http\Controllers\students;

use App\Http\Controllers\Controller;
use App\Models\Course;
use App\Models\wishlists;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class WishlistController extends Controller
{
    public function toggle(Course $course)
    {
        $user = Auth::user();

        if (!$user) {
            return response()->json([
                'success' => false,
                'message' => 'Please login to add items to wishlist'
            ], 401);
        }

        $existingWishlist = wishlists::where('user_id', $user->id)
            ->where('course_id', $course->id)
            ->first();

        if ($existingWishlist) {
            $existingWishlist->delete();
            return response()->json([
                'success' => true,
                'action' => 'removed',
                'message' => 'Course removed from wishlist'
            ]);
        } else {
            wishlists::create([
                'user_id' => $user->id,
                'course_id' => $course->id
            ]);
            return response()->json([
                'success' => true,
                'action' => 'added',
                'message' => 'Course added to wishlist'
            ]);
        }
    }

    public function index()
    {
        $user = Auth::user();
        $wishlistCourses = Course::whereHas('wishlists', function ($query) use ($user) {
            $query->where('user_id', $user->id);
        })->get();

        return view('admin.students.wishlist.index', compact('wishlistCourses'));
    }

    public function check(Course $course)
    {
        $user = Auth::user();

        if (!$user) {
            return response()->json(['inWishlist' => false]);
        }

        $inWishlist = wishlists::where('user_id', $user->id)
            ->where('course_id', $course->id)
            ->exists();

        return response()->json(['inWishlist' => $inWishlist]);
    }
}
