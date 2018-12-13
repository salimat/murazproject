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
           $table->increments('id');

                $table->unsignedInteger('resultats_id')->nullable();
                 $table->longText('detail')->nullable();
                 $table->string('valeur')->nullable();
                  $table->text('item1')->nullable();
                    $table->text('item2')->nullable();
                      $table->text('item3')->nullable();

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
