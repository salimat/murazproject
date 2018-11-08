<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AddModifyToComposantExamensTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('composant_examens', function (Blueprint $table) {
            

            $table->foreign('id_examen')->references('id_examen')->on('examens');


           

            $table->foreign('id_rn')->references('id_rn')->on('resultat_normes');


        

            $table->foreign('id_rmc')->references('id_rmc')->on('resultat_multi_colonnes');
            

           

            $table->foreign('id_rsn')->references('id_rsn')->on('resultat_sans_normes');


           

            $table->foreign('id_rnc')->references('id_rnc')->on('resultat_norme_calcules');
            
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('composant_examens', function (Blueprint $table) {
             $table->dropForeign(['id_examen']);

             $table->dropForeign(['id_rn']);

               $table->dropForeign(['id_rmc']);

                 $table->dropForeign(['id_rsn']);

                   $table->dropForeign(['id_rnc']);
        });
    }
}
