<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateVehiculesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('vehicules', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->date('date_dachat');
            $table->integer('kilometrage');
            $table->string('categorie_vehicule');
            $table->integer('capacite');
            $table->string('immatriculation');
            $table->biginteger('marque_id')->unsigned();
            $table->foreign('marque_id')->references('id')->on('marques');
            $table->biginteger('modele_id')->unsigned();
            $table->foreign('modele_id')->references('id')->on('modeles');
            //$table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('vehicules');
    }
}
