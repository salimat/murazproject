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
            $table->unsignedInteger('composant_examens_id');
              $table->unsignedInteger('reactifs_id');
              $table->date('date_utilisation');
               $table->primary('composant_examens_id','reactifs_id');
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
