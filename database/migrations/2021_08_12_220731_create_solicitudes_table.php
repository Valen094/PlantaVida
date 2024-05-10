<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateSolicitudesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('solicitudes', function (Blueprint $table) {
            $table->increments('id');
            $table->string('solicitante')->nullable();
            $table->string('nombre_apellido')->nullable();
            $table->string('identificacion')->nullable();
            $table->string('direccion')->nullable();
            $table->string('telefono')->nullable();
            $table->string('correo_electronico')->nullable();
            $table->string('motivo')->nullable();
            $table->string('quien')->nullable();
            $table->string('departamento')->nullable();
            $table->string('municipio')->nullable();
            $table->string('razon_social')->nullable();
            $table->string('nit')->nullable();
            $table->string('dirigido')->nullable();
            $table->string('direccion_beneficiario')->nullable();
            $table->string('telefono_beneficiario')->nullable();
            $table->string('correo_beneficiario')->nullable();
            $table->string('politicas')->nullable();
            $table->string('medio_pago')->nullable();
            $table->text('observaciones')->nullable();
            $table->string('pago_verificado')->nullable();
       
            $table->timestamps();

            $table->integer('usuario_id')->unsigned()->nullable();
            $table->foreign('usuario_id')
                ->references('id')->on('users')->onDelete('cascade');

            // Un tipo de arbol puede estar en varias solicitudes
            $table->integer('arbol_id')->unsigned()->nullable();
            $table->foreign('arbol_id')->references('id')->on('arboles')->onDelete('cascade');

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('solicitudes');
    }
}
