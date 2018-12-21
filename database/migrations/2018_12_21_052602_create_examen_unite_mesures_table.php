<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateExamenUniteMesuresTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('examen_unite_mesures', function (Blueprint $table) {
           $table->unsignedInteger('materiel_id')->nullable();
             $table->unsignedInteger('examens_id')->nullable();
           $table->primary(['materiel_id','examens_id']);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('examen_unite_mesures');
    }
}
