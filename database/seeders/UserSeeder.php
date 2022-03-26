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
            'password' => Hash::make('angel123'),
        ]);

        User::create([
            'name' => 'Erick Reyes',
            'email' => 'er@gmail.com',
            'web_site' => 'https://translate.google.com',
            'salary' => 300,
            'department_id' => 2,
            'email_verified_at' => now(),
            'password' => Hash::make('ercik123'),
        ]);

        User::create([
            'name' => 'Fatima Morales',
            'email' => 'fm@gmail.com',
            'web_site' => 'https://translate.google.com',
            'salary' => 850,
            'department_id' => 3,
            'email_verified_at' => now(),
            'password' => Hash::make('fatima123'),
        ]);

        User::create([
            'name' => 'Sonia Ramos',
            'email' => 'sonia@gmail.com',
            'web_site' => 'https://translate.google.com',
            'salary' => 1000,
            'department_id' => 4,
            'email_verified_at' => now(),
            'password' => Hash::make('sonia123'),
        ]);
    }
}
