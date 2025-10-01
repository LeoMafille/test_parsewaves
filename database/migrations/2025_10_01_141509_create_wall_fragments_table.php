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
        Schema::create('wall_fragments', function (Blueprint $table) {
            $table->id();
            $table->foreignId('measure_id')->references('id')->on('measures');
            $table->foreignId('material_id')->references('id')->on('materials');
            $table->float('width');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('wall_fragments');
    }
};
