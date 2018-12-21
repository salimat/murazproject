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
            $table->increments('id');
           //$table->unsignedInteger('patients_id');
            //$table->unsignedInteger('examens_id');
            $table->string('prescripteur');

            // $table->unsignedInteger('id_info_examen');
            $table->string('hopital');
            $table->date('date_examen');
            $table->longText('motif')->nullable();
            $table->string('categorie_patient')->nullable();
            $table->string('etat_patient')->nullable();
            //$table->primary(['patients_id','examens_id']);
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
