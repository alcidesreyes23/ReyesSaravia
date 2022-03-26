<?php

namespace Database\Seeders;

use App\Models\Tag;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class TagSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Tag::create([
            'tag_name' => 'Ciencia',
        ]);

        Tag::create([
            'tag_name' => 'Cultura',
        ]);

        Tag::create([
            'tag_name' => 'Tecnología',
        ]);

        Tag::create([
            'tag_name' => 'Cultura',
        ]);

    }
}
