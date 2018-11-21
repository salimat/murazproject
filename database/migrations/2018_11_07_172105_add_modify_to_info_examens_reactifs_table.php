<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AddModifyToInfoExamensReactifsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('info_examens_reactifs', function (Blueprint $table) {
            //$table->unsignedInteger('id_composant');

           $table->foreign('composant_examens_id')->references('id')->on('composant_examens');


            //$table->unsignedInteger('id_reactif');

           $table->foreign('reactifs_id')->references('id')->on('reactifs');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('info_examens_reactifs', function (Blueprint $table) {
            $table->dropForeign('composant_examens_id');
            $table->dropForeign('reactifs_id');
        });
    }
}
