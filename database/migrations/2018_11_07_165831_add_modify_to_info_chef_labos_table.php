<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AddModifyToInfoChefLabosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('info_chef_labos', function (Blueprint $table) {
             //$table->unsignedInteger('matricule_emp');

           $table->foreign('matricule_emp')->references('matricule_emp')->on('employes');


           // $table->unsignedInteger('id_labo');

           $table->foreign('id_labo')->references('id_labo')->on('laboratoires');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('info_chef_labos', function (Blueprint $table) {
             $table->dropForeign(['matricule_emp']);
            $table->dropForeign(['id_labo']);
        });
    }
}
