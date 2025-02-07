<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class cargolautSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //
        DB::table('cargolaut')->insert([
            'tujuan' => 'bandung',
            'tipe' => 0,
            'tarif' => 6500,
            'min_charge' => 100,
            'estimasi' => '10-14 Hari',
        ]);
    }
}
