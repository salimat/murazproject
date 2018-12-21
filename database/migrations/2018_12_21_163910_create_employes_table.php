<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateEmployesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('employes', function (Blueprint $table) {
            $table->increments('id');
            $table->string('name');
            $table->string('prenom_per');
            $table->string('username')->nullable();
            $table->date('date_naissance');
            $table->string('sexe_per');
            $table->integer('contact_per');
            $table->string('adresse_per');
            $table->string('fonction')->nullable();
            $table->string('email')->unique();
            $table->timestamp('email_verified_at')->nullable();
            $table->rememberToken();
            $table->unsignedInteger('fonctions_id')->nullable();
             $table->unsignedInteger('sections_id')->nullable();

            $table->date('date_emb');
            $table->string('password');

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
        Schema::dropIfExists('employes');
    }
}
