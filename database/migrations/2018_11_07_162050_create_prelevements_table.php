<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePrelevementsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('prelevements', function (Blueprint $table) {

             $table->string('id');
             $table->unsignedInteger('employes_id')->nullable();

             $table->unsignedInteger('patients_id')->nullable();

             $table->date('date_prel');
             $table->date('date_reception');
             //$table->String('echantillon');
            $table->primary(['date_prel','employes_id','patients_id']);
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
        Schema::dropIfExists('prelevements');
    }
}
