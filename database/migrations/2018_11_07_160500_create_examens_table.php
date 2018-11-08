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
           $table->increments('id_examen');

            $table->unsignedInteger('id_section');
            $table->unsignedInteger('id_mat');
            $table->unsignedInteger('id_type_prelevement');
            


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
