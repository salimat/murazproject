<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateInfoExamensReactifsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('info_examens_reactifs', function (Blueprint $table) {
            $table->unsignedInteger('id_composant');
              $table->unsignedInteger('id_reactif');
              $table->date('date_utilisation');
               $table->primary('id_composant','id_reactif');
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
        Schema::dropIfExists('info_examens_reactifs');
    }
}
