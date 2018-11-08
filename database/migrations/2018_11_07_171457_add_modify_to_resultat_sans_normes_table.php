<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AddModifyToResultatSansNormesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('resultat_sans_normes', function (Blueprint $table) {
            // $table->unsignedInteger('id_resultat');

           $table->foreign('id_resultat')->references('id_resultat')->on('resultats');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('resultat_sans_normes', function (Blueprint $table) {
            $table->dropForeign('id_resultat');
        });
    }
}
