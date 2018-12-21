<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AddModifyToPrestationFaitesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('prestation_faites', function (Blueprint $table) {
             $table->foreign('examens_id')->references('id')->on('examens');
              $table->foreign('patients_id')->references('id')->on('patients');
               $table->foreign('resultats_id')->references('id')->on('resultats');
                $table->foreign('info_examens_id')->references('id')->on('info_examens');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('prestation_faites', function (Blueprint $table) {
            $table->dropForeign(['examens_id']);
            $table->dropForeign(['patients_id']);
            $table->dropForeign(['resultats_id']);
            $table->dropForeign(['info_examens_id']);
        });
    }
}
