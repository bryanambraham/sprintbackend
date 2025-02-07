<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('cargomobil', function (Blueprint $table) {
            $table->id();
            // 0 towing 1 carrier
            $table->string('tipe');
            $table->decimal('tarif', 10, 2);
            $table->string('estimasi');
            $table->string('tujuan');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('cargomobil');
    }
};
