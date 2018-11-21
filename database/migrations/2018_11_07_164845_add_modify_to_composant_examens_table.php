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


            $table->foreign('examens_id')->references('id')->on('examens');




            $table->foreign('resultat_normes_id')->references('id')->on('resultat_normes');




            $table->foreign('resultat_multi_colonnes_id')->references('id')->on('resultat_multi_colonnes');




            $table->foreign('resultat_sans_normes_id')->references('id')->on('resultat_sans_normes');




            $table->foreign('resultat_norme_calcules_id')->references('id')->on('resultat_norme_calcules');

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
             $table->dropForeign(['examens_id']);

             $table->dropForeign(['resultat_normes_id']);

               $table->dropForeign(['resultat_multi_colonnes_id']);

                 $table->dropForeign(['resultat_sans_normes_id']);

                   $table->dropForeign(['resultat_norme_calcules_id']);
        });
    }
}
