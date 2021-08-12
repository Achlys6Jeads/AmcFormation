<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCompteUtilisateursTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('compte_utilisateurs', function (Blueprint $table) {
            $table->id();
            $table->string('Password');
            $table->integer('FormationEtape');
            $table->string('Nom');
            $table->string('Prenom');
            $table->string('Email');
            $table->string('Societe');
            $table->string('Agence');
            $table->integer('email_envoyer');
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
        Schema::dropIfExists('compte_utilisateurs');
    }
}
