<?php

namespace Database\Seeders;

use App\Http\Controllers\Tag;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // \App\Models\User::factory(10)->create();
        $this->call([
            DepartmentSeeder::class,
            UserSeeder::class,
            StatusSeeder::class,
            InvestigationSeeder::class,
            TagSeeder::class,
            InvestigationTagSeeder::class,
        ]);
    }
}
