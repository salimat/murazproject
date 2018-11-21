<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AddModifyToStockReactifsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('stock_reactifs', function (Blueprint $table) {
            //$table->unsignedInteger('id_reactif');

           $table->foreign('reactifs_id')->references('id')->on('reactifs');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('stock_reactifs', function (Blueprint $table) {
            $table->dropForeign('reactifs_id');
        });
    }
}
