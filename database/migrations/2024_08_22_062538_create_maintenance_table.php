<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateMaintenanceTable extends Migration
{
    public function up()
    {
        Schema::create('maintenance', function (Blueprint $table) {
            $table->id();
            $table->foreignId('car_id')->constrained()->onDelete('cascade');
            $table->text('description')->nullable();
            $table->decimal('cost', 10, 2)->nullable();
            $table->date('maintenance_date');
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('maintenance');
    }
}