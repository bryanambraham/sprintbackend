<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class cargodaratSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //
        // cargodarat::create([
        //     'tujuan' => 'bandung',
        //     'tarif' => 1900,
        //     'min_charge' => 100,
        //     'estimasi' => '2-3 Hari',
        // ]);
        DB::table('cargodarat')->insert([
            'tujuan' => 'bandung',
            'tarif' => 1900,
            'min_charge' => 100,
            'estimasi' => '2-3 Hari',
        ]);
    }
}
