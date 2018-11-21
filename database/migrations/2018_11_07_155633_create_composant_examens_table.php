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
           $table->increments('id');


            $table->string('nom_composant');


            $table->unsignedInteger('examens_id')->nullable();
            $table->unsignedInteger('resultat_normes_id')->nullable();
            $table->unsignedInteger('resultat_multi_colonnes_id')->nullable();
            $table->unsignedInteger('resultat_sans_normes_id')->nullable();
            $table->unsignedInteger('resultat_norme_calcules_id')->nullable();

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
