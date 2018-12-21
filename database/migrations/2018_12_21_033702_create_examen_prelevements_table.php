<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateExamenPrelevementsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('examen_prelevements', function (Blueprint $table) {
            $table->unsignedInteger('matricule_id')->nullable();
             $table->unsignedInteger('examens_id')->nullable();
              $table->primary(['matricule_id','examens_id']);
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
        Schema::dropIfExists('examen_prelevements');
    }
}
