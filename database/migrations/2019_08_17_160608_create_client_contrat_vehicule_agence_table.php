<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateClientContratVehiculeAgenceTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('client_contrat_vehicule_agence', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->biginteger('client_id')->unsigned();
            $table->foreign('client_id')->references('id')->on('clients');
            $table->biginteger('contrat_id')->unsigned();
            $table->foreign('contrat_id')->references('id')->on('contrats');
            $table->biginteger('vehicule_id')->unsigned();
            $table->foreign('vehicule_id')->references('id')->on('vehicules');
            $table->biginteger('agence_id')->unsigned();
            $table->foreign('agence_id')->references('id')->on('agences');
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
        Schema::dropIfExists('client_contrat_vehicule_agence');
    }
}
