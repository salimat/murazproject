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

           $table->foreign('employes_id')->references('id')->on('employes');


           // $table->unsignedInteger('id_labo');

           $table->foreign('laboratoires_id')->references('id')->on('laboratoires');
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
             $table->dropForeign(['employes_id']);
            $table->dropForeign(['laboratoires_id']);
        });
    }
}
