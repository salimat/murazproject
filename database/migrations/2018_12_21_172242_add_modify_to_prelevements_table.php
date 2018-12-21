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

           $table->foreign('employes_id')->references('id')->on('employes');


          // $table->unsignedInteger('id_patient');

           $table->foreign('patients_id')->references('id')->on('patients');

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
            $table->dropForeign('employes_id');
            $table->dropForeign('patients_id');
        });
    }
}
