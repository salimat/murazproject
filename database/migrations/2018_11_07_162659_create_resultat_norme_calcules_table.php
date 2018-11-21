<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateResultatNormeCalculesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('resultat_norme_calcules', function (Blueprint $table) {
              $table->increments('id');
            $table->longText('detail');
              $table->unsignedInteger('resultats_id')->nullable();
                $table->float('valeur');
                  $table->float('taux');
                    $table->float('valeur_calcule');
                      $table->float('valeur_absolu');

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
        Schema::dropIfExists('resultat_norme_calcules');
    }
}
