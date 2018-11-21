<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AddModifyToLaboratoiresTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('laboratoires', function (Blueprint $table) {
            //$table->unsignedInteger('id_departement');

           $table->foreign('departements_id')->references('id')->on('departements');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('laboratoires', function (Blueprint $table) {
            $table->dropForeign(['departements_id']);
        });
    }
}
