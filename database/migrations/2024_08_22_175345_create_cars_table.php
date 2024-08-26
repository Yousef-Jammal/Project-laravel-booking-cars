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
            $table->unsignedBigInteger('brand_id');
            $table->string('model');
            $table->string('body');
            $table->string('ac');
            $table->integer('door');
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
            $table->date('date_created');
            $table->foreign('user_id')->references('id')->on('users')->onDelete('cascade');
            $table->foreign('brand_id')->references('id')->on('brands')->onDelete('cascade');
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