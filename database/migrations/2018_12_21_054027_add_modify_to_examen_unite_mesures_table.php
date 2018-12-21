<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AddModifyToExamenUniteMesuresTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('examen_unite_mesures', function (Blueprint $table) {
             $table->foreign('materiel_id')->references('id')->on('materiels');
               $table->foreign('examens_id')->references('id')->on('examens');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('examen_unite_mesures', function (Blueprint $table) {
             $table->dropForeign(['materiel_id']);
             $table->dropForeign(['examens_id']);
        });
    }
}
