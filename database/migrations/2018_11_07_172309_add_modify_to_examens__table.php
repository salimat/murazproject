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

             $table->foreign('sections_id')->references('id')->on('sections');


              //$table->unsignedInteger('id_mat');

               //$table->foreign('materiels_id')->references('id')->on('materiels');



               //$table->unsignedInteger('id_type_prelevement');

               $table->foreign('echantillons_id')->references('id')->on('echantillons');
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
             $table->dropForeign(['sections_id']);

            //$table->dropForeign(['materiels_id']);


            $table->dropForeign(['echantillons_id']);
        });
    }
}
