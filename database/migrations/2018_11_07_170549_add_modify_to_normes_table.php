<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AddModifyToNormesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('normes', function (Blueprint $table) {
            // $table->unsignedInteger('id_unite');

           $table->foreign('unite_mesures_id')->references('id')->on('unite_mesures');


           //$table->unsignedInteger('id_composant');

           $table->foreign('composant_examens_id')->references('id')->on('composant_examens');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('normes', function (Blueprint $table) {
            $table->dropForeign(['unite_mesures_id']);
            $table->dropForeign(['composant_examens_id']);
        });
    }
}
