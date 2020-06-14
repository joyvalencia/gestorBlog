<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateComentarisTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('comentaris', function (Blueprint $table) {
            $table->id();
            $table->text('missatge')->nullable();
            $table->string('email')->nullable();
            $table->boolean('visibilitatComentari');
            $table->unsignedBigInteger('idUsuari');
            $table->foreign('idUsuari')->references('id')->on('users');
            $table->unsignedBigInteger('idNoticia');
            $table->foreign('idNoticia')->references('id')->on('noticias');
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
        Schema::dropIfExists('comentaris');
    }
}
