<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AddModifyToResultatsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('resultats', function (Blueprint $table) {
            // $table->unsignedInteger('id_examen');

           $table->foreign('examens_id')->references('id')->on('examens');


           // $table->unsignedInteger('id_patient');

           $table->foreign('patients_id')->references('id')->on('patients');

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
        Schema::table('resultats', function (Blueprint $table) {
            $table->dropForeign('examens_id');
            $table->dropForeign('patients_id');
            $table->dropForeign('employes_id');
        });
    }
}
