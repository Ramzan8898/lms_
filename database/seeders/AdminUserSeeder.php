<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\User;
use Illuminate\Support\Facades\Hash;
use Spatie\Permission\Models\Role;

class AdminUserSeeder extends Seeder
{
    public function run(): void
    {
        $adminRole = Role::create(['name' => 'admin']);
        $editorRole = Role::create(['name' => 'instructor']);
        $userRole = Role::create(['name' => 'student']);

        $user = User::updateOrCreate(
            [
                'name' => 'Iqrash Ahmad',
                'email' => 'iqrash@lms.com',
                'password' => Hash::make('iqrash'),
                'email_verified_at' => now(),
            ],

        );
        $user->assignRole($adminRole);
    }
}
