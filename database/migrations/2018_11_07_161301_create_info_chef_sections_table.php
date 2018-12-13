<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateInfoChefSectionsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('info_chef_sections', function (Blueprint $table) {

            $table->unsignedInteger('employes_id')->nullable();
            $table->unsignedInteger('sections_id')->nullable();
            $table->date('date_debut');
            $table->date('date_fin');
            $table->primary('employes_id','sections_id');
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
        Schema::dropIfExists('info_chef_sections');
    }
}
