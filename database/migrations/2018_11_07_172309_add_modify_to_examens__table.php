<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AddModifyToExamensTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('examens', function (Blueprint $table) {
             //$table->unsignedInteger('id_section');

             $table->foreign('id_section')->references('id_section')->on('sections');


              //$table->unsignedInteger('id_mat');

               $table->foreign('id_mat')->references('id_mat')->on('materiels');



               //$table->unsignedInteger('id_type_prelevement');

               $table->foreign('id_type_prelevement')->references('id_type_prelevement')->on('type_prelevements');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('examens', function (Blueprint $table) {
             $table->dropForeign(['id_section']);

            $table->dropForeign(['id_mat']);


            $table->dropForeign(['id_type_prelevement']);
        });
    }
}
