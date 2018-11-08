<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AddModifyToEtatReactifsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('etat_reactifs', function (Blueprint $table) {
             //$table->unsignedInteger('id_reactif');

              $table->foreign('id_reactif')->references('id_reactif')->on('reactifs');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('etat_reactifs', function (Blueprint $table) {
            
             $table->dropForeign(['id_reactif']);
        });
    }
}
