<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateInfoChefLabosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('info_chef_labos', function (Blueprint $table) {
            $table->unsignedInteger('employes_id')->nullable();
            $table->unsignedInteger('laboratoires_id')->nullable();
            $table->date('date_debut');
            $table->date('date_fin');
            $table->primary('employes_id','laboratoires_id');
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
        Schema::dropIfExists('info_chef_labos');
    }
}
