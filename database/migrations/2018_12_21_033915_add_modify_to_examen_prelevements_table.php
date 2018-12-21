<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AddModifyToExamenPrelevementsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('examen_prelevements', function (Blueprint $table) {
              $table->foreign('matricule_id')->references('id')->on('employes');
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
        Schema::table('examen_prelevements', function (Blueprint $table) {
            $table->dropForeign(['matricule_id']);
            $table->dropForeign(['examens_id']);
        });
    }
}
