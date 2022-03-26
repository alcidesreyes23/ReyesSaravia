<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        User::create([
            'name' => 'Angel Saravia',
            'email' => 'ss.2015015@gmail.com',
            'web_site' => 'https://translate.google.com',
            'salary' => 450,
            'department_id' => 1,
            'email_verified_at' => now(),
            'password' => Hash::make('admin123'),
        ]);
    }
}
