<?php

namespace Database\Seeders;

use App\Models\Category;
use App\Models\Course;
use Illuminate\Database\Seeder;
use App\Models\User;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Str;
use Spatie\Permission\Models\Role;

class AdminUserSeeder extends Seeder
{
    public function run(): void
    {

        function moveToStorage($fileName, $folder)
        {
            $sourcePath = public_path("assets/seeder/$fileName");

            if (!File::exists($sourcePath)) {
                return null;
            }

            $newName = Str::random(10) . '_' . $fileName;
            $destination = "$folder/$newName";

            Storage::disk('public')->put(
                $destination,
                File::get($sourcePath)
            );

            // IMPORTANT: store with storage prefix
            return "storage/" . $destination;
        }
        // Create Roles
        $adminRole = Role::firstOrCreate(['name' => 'admin']);
        $instRole = Role::firstOrCreate(['name' => 'instructor']);
        $stdRole = Role::firstOrCreate(['name' => 'student']);

        // Admin User
        $admin = User::updateOrCreate(
            ['email' => 'admin@lms.com'],
            [
                'name' => 'Admin',
                'password' => Hash::make('admin'),
                'email_verified_at' => now(),
            ]
        );
        $admin->assignRole($adminRole);

        // Instructor User
        $inst = User::updateOrCreate(
            ['email' => 'rabia@lms.com'],
            [
                'name' => 'Rabia Bashir',
                'password' => Hash::make('rabia'),
                'email_verified_at' => now(),
            ]
        );
        $inst->assignRole($instRole);

        $courseInst = $inst->instructor()->updateOrCreate(
            ['user_id' => $inst->id],
            [
                'phone' => '1234567890',
                'expertise' => 'Web Development',
                'experience' => '5 years',
                'qualification' => 'BS Computer Science',
                'status' => 'active',
                'avatar' => moveToStorage('instructor.jpg', 'avatars'),
                'bio' => 'I am a passionate web developer with 5 years of experience in building dynamic and responsive websites.',
            ]
        );

        // Student User
        $std = User::updateOrCreate(
            ['email' => 'ayesha@lms.com'],
            [
                'name' => 'Ayesha Khan',
                'password' => Hash::make('ayesha'),
                'email_verified_at' => now(),
            ]
        );
        $std->assignRole($stdRole);

        $std->student()->updateOrCreate(
            ['user_id' => $std->id],
            [
                'phone' => '0987654321',
                'address' => '123 Main St, City, Country',
                'avatar' => moveToStorage('Ayesha khan.jfif', 'avatars'),
                'status' => 'active',
                'qualification' => 'BS Computer Science',
            ]
        );

        // Course Categories
        $categories = ['Web Development', 'Data Science', 'Design', 'Marketing', 'Business'];

        foreach ($categories as $cat) {
            Category::updateOrCreate(
                ['title' => $cat],
                [
                    'slug' => Str::slug($cat),
                    'description' => "Courses related to $cat",
                ]
            );
        }

        // Courses
        $courseInst->courses()->createMany([
            [
                'title' => 'Laravel for Beginners',
                'slug' => Str::slug('Laravel for Beginners'),
                'banner' => moveToStorage('Laravel Guide.jpg', 'course-banners'),
                'price' => 49.99,
                'duration' => '10 hours',
                'description' => 'Learn the basics of Laravel.',
                'category_id' => Category::where('title', 'Web Development')->first()->id,
            ],
            [
                'title' => 'Data Science with Python',
                'slug' => Str::slug('Data Science with Python'),
                'banner' => moveToStorage('Data Analysis.jpg', 'course-banners'),
                'price' => 59.99,
                'duration' => '12 hours',
                'description' => 'Explore data science concepts using Python.',
                'category_id' => Category::where('title', 'Data Science')->first()->id,
            ],
            [
                'title' => 'UI/UX Design Fundamentals',
                'slug' => Str::slug('UI/UX Design Fundamentals'),
                'banner' => moveToStorage('UI Ux.jpg', 'course-banners'),
                'price' => 29.99,
                'duration' => '8 hours',
                'description' => 'Learn UI/UX design principles.',
                'category_id' => Category::where('title', 'Design')->first()->id,
            ]
        ]);

        // Lessons
        $laravelCourse = Course::where('title', 'Laravel for Beginners')->first();

        $laravelCourse->lessons()->createMany([
            [
                'title' => 'Introduction to Laravel',
                'type' => 'video',
                'file' => 'https://www.youtube.com/watch?v=ImtZ5yENzgE',
                'description' => 'Get an overview of Laravel.',
            ],
            [
                'title' => 'Routing in Laravel',
                'type' => 'video',
                'file' => 'https://www.youtube.com/watch?v=ImtZ5yENzgE',
                'description' => 'Learn how to define routes.',
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
