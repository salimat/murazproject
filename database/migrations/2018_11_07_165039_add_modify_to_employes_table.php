<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AddModifyToEmployesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('employes', function (Blueprint $table) {
            // $table->unsignedInteger('id_fonction');

            $table->foreign('fonctions_id')->references('id')->on('fonctions');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('employes', function (Blueprint $table) {
             $table->dropForeign(['fonctions_id']);
        });
    }
}
