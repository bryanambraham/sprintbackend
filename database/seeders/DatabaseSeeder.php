<?php

namespace Database\Seeders;

use App\Models\User;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // Memanggil seeder-seeder yang diperlukan
        $this->call([
            BlogSeeder::class,
            cargodaratSeeder::class,   // Memanggil cargodaratSeeder
            cargolautSeeder::class,    // Memanggil cargolautSeeder
            cargomobilSeeder::class,   // Memanggil cargomobilSeeder
            cargoudaraSeeder::class,  // Memanggil cargodudaraSeeder
        ]);
    }
}
