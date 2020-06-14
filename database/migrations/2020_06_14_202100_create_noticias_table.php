<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateNoticiasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('noticias', function (Blueprint $table) {
            $table->id();
            $table->string('titolNoticia')->nullable();
            $table->date('dataCreacio');
            $table->date('dataModificacio');
            $table->text('cosNoticia')->nullable();
            $table->string('imatge')->nullable();
            $table->boolean('visibilitatNoticia'); 
            $table->unsignedBigInteger('idBlog');
            $table->foreign('idBlog')->references('id')->on('blogs');           
            // $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('noticias');
    }
}
