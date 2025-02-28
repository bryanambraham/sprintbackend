<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class BlogSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //
        DB::table('blogs')->insert([
            'image' => fake()->imageUrl(640, 480, 'cover'),
            'title' => fake()->title(),
            'writer' => fake()->name(),
            'content' => fake()->paragraph(4),
            'summary' => fake()->paragraph(2),
        ]);

        DB::table('blogs')->insert([
            'image' => fake()->imageUrl(640, 480, 'cover'),
            'title' => fake()->title(),
            'writer' => fake()->name(),
            'content' => fake()->paragraph(4),
            'summary' => fake()->paragraph(2),
        ]);
    }
}
