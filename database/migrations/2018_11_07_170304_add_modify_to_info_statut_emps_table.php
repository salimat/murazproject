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

           $table->foreign('employes_id')->references('id')->on('employes');


            //$table->unsignedInteger('id_statut_emp');

           $table->foreign('statut_employes_id')->references('id')->on('statut_employes');
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
            $table->dropForeign(['employes.id']);
            $table->dropForeign(['statut_employes.id']);
        });
    }
}
