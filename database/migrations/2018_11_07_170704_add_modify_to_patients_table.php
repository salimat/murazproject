<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AddModifyToPatientsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('patients', function (Blueprint $table) {
           // $table->unsignedInteger('id_statut_patient');

           $table->foreign('id_statut_patient')->references('id_statut_patient')->on('statut_patients');

           // $table->unsignedInteger('matricule_emp');

           $table->foreign('matricule_emp')->references('matricule_emp')->on('employes');

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('patients', function (Blueprint $table) {
              $table->dropForeign(['id_statut_patient']);
            $table->dropForeign(['matricule_emp']);
        });
    }
}
