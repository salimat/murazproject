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

           $table->foreign('patients_id')->references('id')->on('patients');

           // $table->unsignedInteger('id_assurance');

           $table->foreign('assurances_id')->references('id')->on('assurances');
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
            $table->dropForeign(['patients_id']);
            $table->dropForeign(['assurances_id']);
        });
    }
}
