<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AddModifyToResultatTypeResultatsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('resultat_type_resultats', function (Blueprint $table) {
             $table->foreign('RNC_id')->references('id')->on('resultat_norme_calcules');
            $table->foreign('resultats_id')->references('id')->on('resultats');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('resultat_type_resultats', function (Blueprint $table) {
             $table->dropForeign(['RNC_id']);
            $table->dropForeign(['resultats_id']);
        });
    }
}
