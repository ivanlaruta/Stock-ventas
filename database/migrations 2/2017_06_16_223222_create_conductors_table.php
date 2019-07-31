<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateConductorsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('conductores', function (Blueprint $table) {
            $table->increments('id');
            $table->string('ci',30)->nullable();
            $table->string('ex',3)->nullable();
            $table->string('nombre',30)->nullable();
            $table->string('paterno',30)->nullable();
            $table->string('materno',30)->nullable();
            $table->string('telefono',15)->nullable();
            $table->string('transportador')->nullable();
            $table->enum('estado',['1','0'])->default('1');
            $table->string('creado_por')->nullable()->unsigned();
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
        Schema::dropIfExists('conductores');
    }
}
