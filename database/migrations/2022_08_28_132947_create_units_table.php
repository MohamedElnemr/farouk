<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateUnitsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('units', function (Blueprint $table) {
            $table->id();
            $table->string('email');
            $table->string('phone');
            $table->string('name');
            $table->string('unit_type');
            $table->string('location');
            $table->boolean('compound')->nullable();
            $table->string('compound_name')->nullable();
            $table->unsignedBigInteger('area');
            $table->unsignedBigInteger('room');
            $table->unsignedBigInteger('bathroom');
            $table->longText('nots')->nullable();
            $table->longText('red_bricks')->nullable();
            $table->longText('semi_finished')->nullable();
            $table->longText('Semi_finished_alumetal')->nullable();
            $table->longText('Personal')->nullable();
            $table->longText('rent')->nullable();
            $table->longText('Sale')->nullable();
            $table->longText('economical')->nullable();
            $table->longText('average')->nullable();
            $table->longText('vip')->nullable();
            $table->longText('ultra_vip')->nullable();
            $table->longText('super_ultra_vip')->nullable();
            $table->longText('amount')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('units');
    }
}
