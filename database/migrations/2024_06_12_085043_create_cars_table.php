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
        Schema::create('cars', function (Blueprint $table) {
            $table->id();
            $table->unsignedInteger('mark_id');
            $table->string('model');
            $table->text('description');
            $table->integer('year');
            $table->integer('price');
            $table->string('image')->nullable();
            $table->timestamps();
            $table->softDeletes();

            $table->index('mark_id', 'car_mark_idx');
            $table->foreign('mark_id', 'car_mark_fk')->on('marks')->references('id');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('cars');
    }
};
