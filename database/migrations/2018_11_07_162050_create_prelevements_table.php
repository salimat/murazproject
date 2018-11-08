<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePrelevementsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('prelevements', function (Blueprint $table) {
            
             $table->string('id_prel');
             $table->unsignedInteger('matricule_emp');
             
             $table->unsignedInteger('id_patient');
             
             $table->date('date_prel');
             $table->time('heure_prel');
            $table->primary(['id_prel','matricule_emp','id_patient']);
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
        Schema::dropIfExists('prelevements');
    }
}
