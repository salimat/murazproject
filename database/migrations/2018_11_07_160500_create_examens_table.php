<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateExamensTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('examens', function (Blueprint $table) {
           $table->increments('id');

            $table->unsignedInteger('sections_id')->nullable();
            $table->unsignedInteger('materiels_id')->nullable();
            $table->unsignedInteger('echantillons_id')->nullable();



            $table->string('nom_examen');
            $table->float('montant_examen');
            $table->string('abreviation');

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
        Schema::dropIfExists('examens');
    }
}
