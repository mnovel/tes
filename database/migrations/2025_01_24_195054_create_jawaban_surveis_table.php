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
        Schema::create('jawaban_surveis', function (Blueprint $table) {
            $table->id();
            $table->uuid('sesi_id');
            $table->unsignedBigInteger('question_id');
            $table->text('answer');

            $table->foreign('sesi_id')->references('id')->on('sesis')->onDelete('cascade');
            $table->foreign('question_id')->references('id')->on('surveis')->onDelete('restrict')->onUpdate('restrict');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('jawaban_surveis');
    }
};
