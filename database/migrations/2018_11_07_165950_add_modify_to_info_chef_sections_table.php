<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AddModifyToInfoChefSectionsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('info_chef_sections', function (Blueprint $table) {
            //$table->unsignedInteger('matricule_emp');

           $table->foreign('matricule_emp')->references('matricule_emp')->on('employes');


          // $table->unsignedInteger('id_section');

           $table->foreign('id_section')->references('id_section')->on('sections');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('info_chef_sections', function (Blueprint $table) {
             $table->dropForeign(['matricule_emp']);
            $table->dropForeign(['id_section']);
        });
    }
}
