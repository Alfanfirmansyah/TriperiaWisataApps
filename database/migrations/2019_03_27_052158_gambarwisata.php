<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class Gambarwisata extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('gambarwisata', function (Blueprint $table) {
            $table->increments('gambarwisataid');
            $table->string('deskripsinama',100);
              $table->string('gambarwisata',100);
                $table->unsignedBigInteger('wisataid_fk');
                $table->foreign('wisataid_fk')->references('wisataid')->on('datawisata')
      ->onDelete('cascade');
         
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('gambarwisata');
    }
}
