<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateEtatReactifsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('etat_reactifs', function (Blueprint $table) {
            $table->increments('id');

            $table->unsignedInteger('reactifs_id');
            $table->float('valeur_jour');
            $table->datetime('date_jour');
            $table->string('etat_jour');

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
        Schema::dropIfExists('etat_reactifs');
    }
}
