w<?php

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
        Schema::create('profesis', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->uuid('bakat_id');
            $table->timestamps();

            $table->foreign('bakat_id')
                ->references('id')
                ->on('bakats')
                ->onUpdate('cascade')->onDelete('restrict');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('profesis');
    }
};
