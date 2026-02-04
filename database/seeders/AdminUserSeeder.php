<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\User;
use Illuminate\Support\Facades\Hash;

class AdminUserSeeder extends Seeder
{
    public function run(): void
    {
        $user = User::updateOrCreate(
            ['email' => 'iqrash@lms.com'],
            [
                'name' => 'Iqrash Ahmad',
                'password' => Hash::make('iqrash1122'),
                'email_verified_at' => now(),
            ]
        );

        $user->assignRole('admin');
    }
}
