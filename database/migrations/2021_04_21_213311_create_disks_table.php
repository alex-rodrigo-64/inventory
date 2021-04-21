<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateDisksTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('disks', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('id_numero');
            $table->string('tarjetaLogica');
            $table->string('modelo');
            $table->string('marca');
            $table->string('capacidad');
            $table->string('tipoEntrada');
            $table->text('observaciones')->nullable();
            $table->string('bandera')->default(0);
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
        Schema::dropIfExists('disks');
    }
}
