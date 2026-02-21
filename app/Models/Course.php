<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Course extends Model
{
    protected $guarded = [];

    public function instructor()
    {
        return $this->belongsTo(Instructor::class);
    }

    public function lessons()
    {
        return $this->hasMany(Lesson::class);
    }

    public function category()
    {
        return $this->belongsTo(Category::class);
    }


    public function enrollments()
    {
        return $this->hasMany(Enrollment::class);
    }


    public function students()
    {
        return $this->belongsToMany(User::class, 'enrollments')
            ->withPivot('status', 'amount', 'payment_intent_id', 'created_at')
            ->withTimestamps();
    }

    public function enrolledStudents()
    {
        return $this->students()->wherePivot('status', 'completed');
    }



    public function isUserEnrolled($userId)
    {
        return $this->enrollments()
            ->where('user_id', $userId)
            ->where('status', 'completed')
            ->exists();
    }

    // Optional: Add method to get enrolled count
    public function getEnrolledCountAttribute()
    {
        return $this->enrollments()
            ->where('status', 'completed')
            ->count();
    }

    public function progress()
    {
        return $this->hasMany(LessonProgress::class);
    }

    public function getUserProgress($userId)
    {
        $totalLessons = $this->lessons()->count();
        if ($totalLessons === 0) return 0;

        $completedLessons = LessonProgress::where('user_id', $userId)
            ->where('course_id', $this->id)
            ->where('completed', true)
            ->count();

        return round(($completedLessons / $totalLessons) * 100);
    }

    public function getCompletedLessonsCount($userId)
    {
        return LessonProgress::where('user_id', $userId)
            ->where('course_id', $this->id)
            ->where('completed', true)
            ->count();
    }
}
