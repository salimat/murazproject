<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateInfoChefLabosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('info_chef_labos', function (Blueprint $table) {
            $table->unsignedInteger('matricule_emp');
            $table->unsignedInteger('id_labo');
            $table->date('date_debut');
            $table->date('date_fin');
            $table->primary('matricule_emp','id_labo');
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
        Schema::dropIfExists('info_chef_labos');
    }
}
