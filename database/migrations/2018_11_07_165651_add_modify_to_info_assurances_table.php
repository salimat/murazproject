<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AddModifyToInfoAssurancesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('info_assurances', function (Blueprint $table) {
           //  $table->unsignedInteger('id_patient');

           $table->foreign('id_patient')->references('id_patient')->on('patients');

           // $table->unsignedInteger('id_assurance');

           $table->foreign('id_assurance')->references('id_assurance')->on('assurances');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('info_assurances', function (Blueprint $table) {
            $table->dropForeign(['id_patient']);
            $table->dropForeign(['id_assurance']);
        });
    }
}
