<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateInfoStatutEmpsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('info_statut_emps', function (Blueprint $table) {
            $table->unsignedInteger('employes_id');
             $table->unsignedInteger('statut_employes_id');
            $table->date('date_debut');
            $table->date('date_fin');
            $table->primary('statut_employes_id','employes_id');
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
        Schema::dropIfExists('info_statut_emps');
    }
}
