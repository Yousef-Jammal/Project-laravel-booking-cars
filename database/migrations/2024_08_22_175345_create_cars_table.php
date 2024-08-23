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
            $table->unsignedBigInteger('user_id');
            $table->string('availability');
            $table->string('brand');
            $table->string('model');
            $table->string('body');
            $table->string('ac');
            $table->string('door');
            $table->integer('mileage');
            $table->string('fuel_type');
            $table->string('make');
            $table->string('transmission');
            $table->string('drivetrian');
            $table->string('vin');
            $table->string('brake');
            $table->year('year');
            $table->integer('engine_hp');
            $table->float('rating')->default(0);
            $table->integer('num_of_ratings')->default(0);
            $table->float('price_per_day');
            $table->foreign('user_id')->references('id')->on('users')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.yousef
     */
    public function down(): void
    {
        Schema::dropIfExists('cars');
    }
};