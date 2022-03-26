<?php

namespace Database\Seeders;

use App\Models\Investigation;
use App\Models\Status;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class InvestigationSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $s = Status::all()->random();

        Investigation::create([
            'title' => 'Como ahorrar más agua',
            'description' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.',
            'status_id' => $s->id
        ]);

        Investigation::create([
            'title' => 'Corrupción politica',
                'description' => 'Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.',
                'status_id' => $s->id,
        ]);

        Investigation::create([
            'title' => 'Enfretamiento Nuclear',
            'description' => 'Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur.',
            'status_id' => $s->id,
        ]);

        Investigation::create([
            'title' => 'Energia Eolica',
            'description' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.',
            'status_id' => $s->id,
        ]);
    }
}
