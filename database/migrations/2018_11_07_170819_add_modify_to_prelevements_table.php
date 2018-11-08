<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AddModifyToPrelevementsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('prelevements', function (Blueprint $table) {
            //$table->unsignedInteger('matricule_emp');

           $table->foreign('matricule_emp')->references('matricule_emp')->on('employes');


          // $table->unsignedInteger('id_patient');

           $table->foreign('id_patient')->references('id_patient')->on('patients');

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('prelevements', function (Blueprint $table) {
            $table->dropForeign('matricule_emp');
            $table->dropForeign('id_patient');
        });
    }
}
