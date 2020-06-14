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
            $table->string('alies')->unique();
            $table->string('password')->unique();
            $table->string('nom')->nullable();
            $table->string('cognom')->nullable();
            $table->date('dataNaixement')->nullable();            
            $table->string('email')->unique();
            $table->string('imatge')->nullable();            
            $table->timestamp('email_verified_at')->nullable();
            $table->unsignedBigInteger('idRol');
            $table->foreign('idRol')->references('id')->on('rols');
            // $table->rememberToken();
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
