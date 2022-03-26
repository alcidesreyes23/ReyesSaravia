<?php

namespace Database\Seeders;

use App\Models\Investigation;
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
        Investigation::create([
            'title' => 'Como ahorrar más agua',
            'description' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.',
            'status_id' => 'Iniciado'
        ]);

        Investigation::create([
            'title' => 'Corrupción politica',
                'description' => 'Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.',
                'status_id' => 'No iniciado',
        ]);

        Investigation::create([
            'title' => 'Enfretamiento Nuclear',
            'description' => 'Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur.',
            'status_id' => 'Finalizado',
        ]);

        Investigation::create([
            'title' => 'Energia Eolica',
            'description' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.',
            'status_id' => 'Iniciado',
        ]);
    }
}
