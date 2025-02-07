<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class cargomobilSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //
        DB::table('cargomobil')->insert([
            'tujuan' => 'lampung',
            'tipe' => 0,
            'tarif' => 8000000,
            'estimasi' => '2-3 Hari',
        ]);
    }
}
