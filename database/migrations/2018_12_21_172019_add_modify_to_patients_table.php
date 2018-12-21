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


           // $table->unsignedInteger('matricule_emp');

           $table->foreign('employes_id')->references('id')->on('employes');

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
              $table->dropForeign(['statut_patients_id']);
            $table->dropForeign(['employes_id']);
        });
    }
}
