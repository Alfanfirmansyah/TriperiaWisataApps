<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class Datawisata extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('datawisata', function (Blueprint $table) {
            $table->bigIncrements('wisataid');
            $table->string('namawisata',50);
            $table->text('deskripsiwisata');
            $table->string('gambar',100);
            $table->string('latitude',100);
            $table->string('longitude',100);
            $table->text('embedmaps');
            $table->string('lokasi',255);
            $table->integer('kategoriid_fk');
            $table->integer('wilayahid_fk');
            $table->integer('created_by');

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('datawisata');
    }
}
