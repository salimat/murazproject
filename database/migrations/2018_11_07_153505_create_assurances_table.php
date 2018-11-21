<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateAssurancesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('assurances', function (Blueprint $table) {
            $table->increments('id');
            $table->string('nom_assurance');
            $table->string('adresse_assurance');
            $table->integer('tel_assurance');
            $table->string('email_assurance');
            $table->string('code_post_assurance');
            $table->string('abreviation');
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
        Schema::dropIfExists('assurances');
    }
}
