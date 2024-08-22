<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCarsTable extends Migration
{
    public function up()
    {
        Schema::create('cars', function (Blueprint $table) {
            $table->id();
            $table->string('brand');
            $table->string('model');
            $table->enum('transmission', ['automatic', 'manual','automated manual'])->default('automatic');
            $table->enum('fuel type', ['diesel', 'petrol','electric', 'hybrid'])->default('petrol');
            $table->string('body');
            $table->integer('mileage');
            $table->string('VIN')->unique();
            $table->enum('drivetrian', ['front Wheel', 'rear wheel','four wheel'])->default('front Wheel');
            $table->String('AC');
            $table->year('year');
            $table->integer('door')->default('Air Condition');
            $table->integer('Engine (Hp)');
            $table->integer('price_per_day');
            $table->string('color')->nullable();
            $table->decimal('daily_rate', 10, 2);
            $table->foreignId('user_id')->constrained()->onDelete('cascade');
            $table->enum('status', ['available', 'rented'])->default('available');
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('cars');
    }
}