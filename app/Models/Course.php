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
}
