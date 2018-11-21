<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AddModifyToInfoExamensTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('info_examens', function (Blueprint $table) {
            //$table->unsignedInteger('id_patient');

           $table->foreign('patients_id')->references('id')->on('patients');


           //$table->unsignedInteger('id_examen');

           $table->foreign('examens_id')->references('id')->on('examens');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('info_examens', function (Blueprint $table) {
             $table->dropForeign(['patients.id']);
            $table->dropForeign(['examens.id']);
        });
    }
}
