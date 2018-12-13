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
            $table->unsignedInteger('patients_id')->nullable();
            $table->unsignedInteger('assurances_id')->nullable();
            $table->string('type_assurance');
            $table->float('pourcentage');
            $table->longText('detail')->nullable();
            $table->DateTime('date_validite');
            $table->primary('assurances_id','patients_id');
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
