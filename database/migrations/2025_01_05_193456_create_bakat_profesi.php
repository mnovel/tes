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
        Schema::create('bakat_profesi', function (Blueprint $table) {
            $table->id();
            $table->uuid('bakat_id');
            $table->foreignId('profesi_id')->constrained()->onDelete('cascade');
            $table->foreign('bakat_id')->references('id')->on('bakats')->onDelete('restrict');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('bakat_profesi');
    }
};
