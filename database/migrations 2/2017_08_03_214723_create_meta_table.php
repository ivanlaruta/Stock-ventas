<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateMetaTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('metas', function (Blueprint $table) {
            $table->increments('id');
            $table->string('regional',100);
            $table->string('sucursal',100);
           
            $table->string('periodo',10)->nullable();

            $table->integer('meta_cotizaciones')->nullable();
            $table->integer('meta_test_drive')->nullable();
            $table->integer('meta_reservas')->nullable();
            $table->integer('meta_facturas')->nullable();

            $table->integer('nro_vendedores')->nullable();
            
            $table->integer('real_cotizaciones')->nullable();
            $table->integer('real_test_drive')->nullable();
            $table->integer('real_reservas')->nullable();
            $table->integer('real_facturas')->nullable();

            $table->string('creado_por')->nullable()->unsigned();
            $table->string('modificado_por')->nullable()->unsigned();
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
        Schema::dropIfExists('metas');
    }
}
