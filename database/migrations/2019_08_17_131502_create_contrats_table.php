<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateContratsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('contrats', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->date('date_depart');
            $table->date('date_reprise');
            $table->integer('km_depart');
            $table->integer('km_retour');
            $table->integer('duree_estime');
            $table->time('heure_de_livraison');
            $table->time('heure_de_reprise');
            $table->float('montant_accompte');
            $table->biginteger('client_id')->unsigned();
            $table->foreign('client_id')->references('id')->on('clients');
            $table->biginteger('vehicule_id')->unsigned();
            $table->foreign('vehicule_id')->references('id')->on('vehicules');
            $table->softDeletes();
            
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
        Schema::dropIfExists('contrats');
    }
}
