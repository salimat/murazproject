<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateResultatsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('resultats', function (Blueprint $table) {
            $table->increments('id_resultat');
              $table->unsignedInteger('id_examen');
                
                  $table->unsignedInteger('id_patient');
                    
                      $table->unsignedInteger('matricule_emp');
                        $table->date('date_resultat');
                          $table->time('heure_resultat');
                            $table->longText('observation');
                              $table->longText('conclusion');
              
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
        Schema::dropIfExists('resultats');
    }
}
