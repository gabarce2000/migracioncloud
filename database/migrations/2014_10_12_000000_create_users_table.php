<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateUsersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('users', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('cedula')->nullable();
            $table->string('telefono')->default('0');
            $table->string('email')->unique();
            $table->string('saldo')->default('100');
            $table->timestamp('email_verified_at')->nullable();
            $table->string('password');
            $table->string('numero_cuenta')->unique()->nullable();
            $table->string('tipo_cuenta')->nullable();
            $table->rememberToken();
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
        Schema::dropIfExists('users');
    }
}
