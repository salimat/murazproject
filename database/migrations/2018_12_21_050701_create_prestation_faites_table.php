<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePrestationFaitesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('prestation_faites', function (Blueprint $table) {
           $table->unsignedInteger('patients_id')->nullable();
            $table->unsignedInteger('examens_id')->nullable();
             $table->unsignedInteger('resultats_id')->nullable();
              $table->unsignedInteger('info_examens_id')->nullable();
               $table->primary(['patients_id','examens_id']);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('prestation_faites');
    }
}
