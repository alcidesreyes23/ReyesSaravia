<?php

namespace Database\Seeders;

use App\Models\Department;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DepartmentSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

        Department::create([
            'department_name' => 'Sistemas',
            'department_position' => 'Asistente técnico',
        ]);

        Department::create([
            'department_name' => 'Finanzas',
            'department_position' => 'Contador',
        ]);

        Department::create([
            'department_name' => 'Recursos Humanos',
            'department_position' => 'Reclutamiento',
        ]);

        Department::create([
            'department_name' => 'Vigilancia',
            'department_position' => 'Vigilante',
        ]);
    }
}
