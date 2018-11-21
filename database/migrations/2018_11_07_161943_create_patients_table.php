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
             $table->increments('id');
            $table->string('nom_per');
            $table->string('prenom_per');
            $table->date('date_naissance');
            $table->string('sexe_per');
            $table->integer('contact_per')->nullable();
            $table->string('adresse_per')->nullable();
            $table->string('email_per')->nullable();
            $table->unsignedInteger('statut_patients_id')->nullable();

            $table->unsignedInteger('employes_id')->nullable();
            $table->string('code_postal_pat')->nullable();
            $table->float('age_pat')->nullable();
            $table->string('profession_pat')->nullable();

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
