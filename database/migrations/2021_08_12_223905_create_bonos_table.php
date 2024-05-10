<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateBonosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('bonos', function (Blueprint $table) {
            $table->increments('id');
            $table->string('estado')->nullable();
            $table->string('motivo')->nullable();
            $table->string('solicitante')->nullable();
            $table->string('beneficiario')->nullable();
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
        Schema::dropIfExists('bonos');
    }
}
