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
        Schema::create('sesi_bakat', function (Blueprint $table) {
            $table->id();
            $table->foreignUuid('sesi_id')->constrained()->onDelete('cascade');
            $table->foreignUuid('bakat_id')->constrained()->onDelete('restrict');
            $table->integer('total');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('pertanyaan_sesi');
    }
};
