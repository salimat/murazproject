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

           $table->foreign('id_unite')->references('id_unite')->on('unite_mesures');


           //$table->unsignedInteger('id_composant');

           $table->foreign('id_composant')->references('id_composant')->on('composant_examens');
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
            $table->dropForeign(['id_unite']);
            $table->dropForeign(['id_composant']);
        });
    }
}
