<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class MovTransferencias extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('mov_transferencias', function (Blueprint $table) {
            $table->engine = 'InnoDB';
            $table->bigIncrements('id');
            $table->string('concepto');
            $table->string('tipo_transaccion', 50);
            $table->string('monto',  5);
            
            $table->unsignedBigInteger('user_representante_id')->nullable();
            $table->unsignedBigInteger('user_destino_id')->nullable();

            $table->foreign('user_representante_id')
                ->references('id')->on('users')
                ->onDelete('set null');

            $table->foreign('user_destino_id')
                ->references('id')->on('users')
                ->onDelete('set null');

            $table->dateTime('fecha_transaccion')->now();
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
       Schema::dropIfExists('mov_transferencias');
    }
}
