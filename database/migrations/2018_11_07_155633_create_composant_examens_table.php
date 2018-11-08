<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateComposantExamensTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('composant_examens', function (Blueprint $table) {
           $table->increments('id_composant');
            

            $table->string('nom_composant');
            
             
            $table->unsignedInteger('id_examen');
            $table->unsignedInteger('id_rn');
            $table->unsignedInteger('id_rmc');
            $table->unsignedInteger('id_rsn');
            $table->unsignedInteger('id_rnc');
 
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
        Schema::dropIfExists('composant_examens');
    }
}
