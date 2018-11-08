<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AddModifyToFacturesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('factures', function (Blueprint $table) {
             //$table->unsignedInteger('id_examen');

           $table->foreign('id_examen')->references('id_examen')->on('examens');


           //$table->unsignedInteger('id_patient');

           $table->foreign('id_patient')->references('id_patient')->on('patients');


           //$table->unsignedInteger('matricule_emp');

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
        Schema::table('factures', function (Blueprint $table) {
             $table->dropForeign(['id_examen']);
            $table->dropForeign(['id_patient']);
            $table->dropForeign(['matricule_emp']);
        });
    }
}
