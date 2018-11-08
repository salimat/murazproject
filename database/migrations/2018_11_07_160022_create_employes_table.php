<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateEmployesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('employes', function (Blueprint $table) {
            $table->increments('matricule_emp');
            
            $table->string('nom_per');
            $table->string('prenom_per');
            $table->date('date_naissance');
            $table->string('sexe_per');
            $table->integer('contact_per');
            $table->string('adresse_per');
            $table->string('mail_per');

            $table->unsignedInteger('id_fonction');

            $table->date('date_emb');
            $table->string('login_emp');
            $table->string('mot_de_passe');
            
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
        Schema::dropIfExists('employes');
    }
}
