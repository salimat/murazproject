<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateResultatTypeResultatsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('resultat_type_resultats', function (Blueprint $table) {
            $table->unsignedInteger('RNC_id')->nullable();
             $table->unsignedInteger('resultats_id')->nullable();
              $table->primary(['RNC_id','resultats_id']);

            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('resultat_type_resultats');
    }
}
