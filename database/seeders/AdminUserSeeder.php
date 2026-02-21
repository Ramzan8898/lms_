<?php

namespace Database\Seeders;

use App\Models\Category;
use App\Models\Course;
use Illuminate\Database\Seeder;
use App\Models\User;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;
use Spatie\Permission\Models\Role;

class AdminUserSeeder extends Seeder
{
    public function run(): void
    {
        // Create Roles
        $adminRole = Role::create(['name' => 'admin']);
        $instRole = Role::create(['name' => 'instructor']);
        $stdRole = Role::create(['name' => 'student']);

        // Admin User
        $admin = User::updateOrCreate(
            [
                'name' => 'Admin',
                'email' => 'admin@lms.com',
                'password' => Hash::make('admin'),
                'email_verified_at' => now(),
            ],

        );
        $admin->assignRole($adminRole);

        // Instructor User
        $inst = User::updateOrCreate([
            'name' => 'Iqrash Ahmad',
            'email' => 'iqrash@lms.com',
            'password' => Hash::make('iqrash'),
            'email_verified_at' => now(),
        ]);
        $inst->assignRole($instRole);
        $courseInst = $inst->instructor()->create([
            'user_id' => $inst->id,
            'phone' => '1234567890',
            'expertise' => 'Web Development',
            'experience' => '5 years',
            'qualification' => 'BS Computer Science',
            'status' => 'active',
            'avatar' => 'https://ui-avatars.com/api/?name=Iqrash+Ahmad&background=random',
            'bio' => 'I am a passionate web developer with 5 years of experience in building dynamic and responsive websites. I specialize in Laravel and Vue.js, and I love sharing my knowledge with others.',
        ]);

        // Student User
        $std = User::updateOrCreate([
            'name' => 'Ramzan',
            'email' => 'ramzan@lms.com',
            'password' => Hash::make('ramzan'),
            'email_verified_at' => now(),
        ]);
        $std->assignRole($stdRole);
        $std->student()->create([
            'user_id' => $std->id,
            'phone' => '0987654321',
            'address' => '123 Main St, City, Country',
            'avatar' => 'https://ui-avatars.com/api/?name=Ramzan&background=random',
            'status' => 'active',
            'qualification' => 'BS Computer Science',
        ]);

        // Course Categories
        $categories = ['Web Development', 'Data Science', 'Design', 'Marketing', 'Business'];
        foreach ($categories as $cat) {
            Category::updateOrCreate([
                'title' => $cat,
                'slug' => Str::slug($cat),
                'description' => "Courses related to $cat",
            ]);
        }

        // Courses
        $courseInst->courses()->createMany([
            [
                'title' => 'Laravel for Beginners',
                'slug' => Str::slug('Laravel for Beginners'),
                'banner' => 'https://source.unsplash.com/800x400/?programming',
                'price' => 49.99,
                'duration' => '10 hours',
                'description' => 'Learn the basics of Laravel, a powerful PHP framework.',
                'category_id' => Category::where('title', 'Web Development')->first()->id,
            ],
            [
                'title' => 'Data Science with Python',
                'slug' => Str::slug('Data Science with Python'),
                'banner' => 'https://source.unsplash.com/800x400/?datascience',
                'price' => 59.99,
                'duration' => '12 hours',
                'description' => 'Explore data science concepts and techniques using Python.',
                'category_id' => Category::where('title', 'Data Science')->first()->id,
            ],
            [
                'title' => 'UI/UX Design Fundamentals',
                'slug' => Str::slug('UI/UX Design Fundamentals'),
                'banner' => 'https://source.unsplash.com/800x400/?design',
                'price' => 29.99,
                'duration' => '8 hours',
                'description' => 'Learn the principles of UI/UX design and create stunning interfaces.',
                'category_id' => Category::where('title', 'Design')->first()->id,
            ]
        ]);

        // Lessons for Laravel Course
        $laravelCourse = Course::where('title', 'Laravel for Beginners')->first();

        $laravelCourse->lessons()->createMany([
            [
                'title' => 'Introduction to Laravel',
                'type' => 'video',
                'file' => 'https://www.youtube.com/watch?v=ImtZ5yENzgE',
                'description' => 'Get an overview of Laravel and its features.',
            ],
            [
                'title' => 'Routing in Laravel',
                'type' => 'video',
                'file' => 'https://www.youtube.com/watch?v=ImtZ5yENzgE',
                'description' => 'Learn how to define routes in Laravel.',
            ],
            [
                'title' => 'Laravel Installation Guide',
                'type' => 'pdf',
                'file' => 'lessons/laravel-installation.pdf',
                'description' => 'Step by step installation guide.',
            ],
        ]);
    }
}
