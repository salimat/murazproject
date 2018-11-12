<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateResultatMultiColonnesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('resultat_multi_colonnes', function (Blueprint $table) {
           $table->increments('id_rmc');

                $table->unsignedInteger('id_resultat');
                 $table->longText('detail');
                 $table->string('valeur');
                  $table->text('item1');
                    $table->text('item2');
                      $table->text('item3');

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
        Schema::dropIfExists('resultat_multi_colonnes');
    }
}
