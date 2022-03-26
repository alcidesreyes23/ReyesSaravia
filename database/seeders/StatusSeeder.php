<?php

namespace Database\Seeders;

use App\Models\Status;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;


class StatusSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Status::create([
            'status_name' => 'No iniciado',
        ]);

        Status::create([
            'status_name' => 'Iniciado',
        ]);

        Status::create([
            'status_name' => 'Finalizado',
        ]);

        Status::create([
            'status_name' => 'Especial'
        ]);
    }
}
