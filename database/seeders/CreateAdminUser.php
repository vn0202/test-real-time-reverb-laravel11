<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class CreateAdminUser extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        User::updateOrCreate(
            [
                'email' => 'admin@admin.com',

            ],
            [
            'name' => 'Admin',
            'password' => bcrypt('123456'),
            'is_admin' => 1
        ]);
        User::create([

            'name' => 'user',
            'email' => 'user@user.com',
            'password' => bcrypt('123456'),
            'is_admin' => 0
        ]);
    }
}
