<?php

namespace Database\Seeders;

use App\Models\Investigation;
use App\Models\InvestigationTag;
use App\Models\Tag;
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
        $i = Investigation::all()->random();
        $t = Tag::all()->random();

        InvestigationTag::create([
            'investigation_id'=> $i->id,
            'tag_id' => $t->id,
        ]);

        InvestigationTag::create([
            'investigation_id'=> $i->id,
            'tag_id' => $t->id,
        ]);

        InvestigationTag::create([
            'investigation_id'=> $i->id,
            'tag_id' => $t->id,
        ]);

        InvestigationTag::create([
            'investigation_id'=> $i->id,
            'tag_id' => $t->id,
        ]);
    }
}
