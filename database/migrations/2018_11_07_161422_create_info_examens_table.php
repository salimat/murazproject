<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateInfoExamensTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('info_examens', function (Blueprint $table) {
           $table->unsignedInteger('id_patient');
            $table->unsignedInteger('id_examen');
            $table->string('prescripteur');

             $table->unsignedInteger('id_info_examen');
            $table->string('hopital');
            $table->date('date_examen');
            $table->longText('motif');
            $table->primary(['id_info_examen','id_patient','id_examen']);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('info_examens');
    }
}
