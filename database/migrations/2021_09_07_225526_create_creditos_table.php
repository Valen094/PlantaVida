<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCreditosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('creditos', function (Blueprint $table) {
            $table->increments('id');
            $table->string('cuota')->nullable();
            $table->double('valor')->nullable();
            $table->string('fecha')->nullable();
            $table->string('pago')->nullable();
            $table->timestamps();

            $table->integer('solicitud_id')->unsigned()->nullable();
            $table->foreign('solicitud_id')
                ->references('id')->on('solicitudes')->onDelete('cascade');

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('creditos');
    }
}
