<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateStockReactifsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('stock_reactifs', function (Blueprint $table) {
           $table->increments('id_stock_reactif');
            $table->unsignedInteger('id_reactif');
             $table->float('valeur_initiale');
              $table->float('valeur_restante');
                $table->date('date_stockage');
               
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
        Schema::dropIfExists('stock_reactifs');
    }
}
