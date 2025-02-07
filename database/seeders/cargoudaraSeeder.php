<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;


class cargoudaraSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //
        DB::table('cargoudara')->insert([
            'tujuan' => 'aceh',
            'min_charge' => 10,
            'estimasi' => '1-2 Hari',
        ]);
    }
}
