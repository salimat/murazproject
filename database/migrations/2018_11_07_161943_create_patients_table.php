<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePatientsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('patients', function (Blueprint $table) {
             $table->increments('id_patient');
            
            $table->string('nom_per');
            $table->string('prenom_per');
            $table->date('date_naissance');
            $table->string('sexe_per');
            $table->integer('contact_per');
            $table->string('adresse_per');
            $table->string('email_per');
            $table->unsignedInteger('id_statut_patient');
        
            $table->unsignedInteger('matricule_emp');
            $table->string('code_postal_pat');
            $table->float('age_pat');
            $table->string('profession_pat');
            
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
        Schema::dropIfExists('patients');
    }
}
