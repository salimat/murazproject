<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateInfoAssurancesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('info_assurances', function (Blueprint $table) {
            $table->unsignedInteger('id_patient');
            $table->unsignedInteger('id_assurance');
            $table->string('type_assurance');
            $table->float('pourcentage');
            $table->longText('detail');
            $table->primary('id_assurance','id_patient');
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
        Schema::dropIfExists('info_assurances');
    }
}
