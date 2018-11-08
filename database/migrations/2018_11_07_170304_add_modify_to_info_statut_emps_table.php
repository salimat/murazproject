<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AddModifyToInfoStatutEmpsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('info_statut_emps', function (Blueprint $table) {
           // $table->unsignedInteger('matricule_emp');

           $table->foreign('matricule_emp')->references('matricule_emp')->on('employes');


            //$table->unsignedInteger('id_statut_emp');

           $table->foreign('id_statut_emp')->references('id_statut_emp')->on('statut_employes');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('info_statut_emps', function (Blueprint $table) {
            $table->dropForeign(['matricule_emp']);
            $table->dropForeign(['id_statut_emp']);
        });
    }
}
