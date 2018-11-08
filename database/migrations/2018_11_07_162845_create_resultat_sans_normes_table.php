<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateResultatSansNormesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('resultat_sans_normes', function (Blueprint $table) {
            $table->increments('id_rsn');
            $table->longText('detail');
              $table->unsignedInteger('id_resultat');
                $table->string('valeur');
                  
                     
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
        Schema::dropIfExists('resultat_sans_normes');
    }
}
