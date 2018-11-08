<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateNormesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('normes', function (Blueprint $table) {
            $table->increments('id_norme');
            $table->unsignedInteger('id_unite');
              $table->unsignedInteger('id_composant');
            $table->float('valeur_max');
            $table->float('valeur_min');
            $table->string('valeur_normal');
            $table->string('sexe');
            $table->string('tranche_age');
            
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
        Schema::dropIfExists('normes');
    }
}
