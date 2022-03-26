<?php

namespace Database\Seeders;

use App\Models\Investigation;
use App\Models\InvestigationTag;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class InvestigationTagSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        InvestigationTag::create([
            'investigation_id'=> '1'
        ]);

        InvestigationTag::create([
            'investigation_id'=> '2'
        ]);

        InvestigationTag::create([
            'investigation_id'=> '1'
        ]);

        InvestigationTag::create([
            'investigation_id'=> '1'
        ]);
    }
}
