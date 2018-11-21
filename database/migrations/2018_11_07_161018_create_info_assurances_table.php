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
            $table->unsignedInteger('patients_id');
            $table->unsignedInteger('assurances_id');
            $table->string('type_assurance');
            $table->float('pourcentage');
            $table->longText('detail');
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
