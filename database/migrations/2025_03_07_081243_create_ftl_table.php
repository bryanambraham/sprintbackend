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
        Schema::create('ftl', function (Blueprint $table) {
            $table->id();
            $table->string('tujuan');
            $table->string('estimasi');
            $table->bigInteger('cde');
            $table->bigInteger('cdd');
            $table->bigInteger('cdd_long');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('ftl');
    }
};
