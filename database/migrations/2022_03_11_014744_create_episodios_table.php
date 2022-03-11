<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateEpisodiosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        
        Schema::create('episodios', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->bigInteger('personaje_id')->unsigned();
            $table->text('url');
            $table->foreign('personaje_id')->references('id')->on('personajes')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        
        Schema::dropIfExists('episodios');
        
    }
}
