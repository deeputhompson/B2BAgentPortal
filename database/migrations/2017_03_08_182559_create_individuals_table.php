<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateIndividualsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('individuals', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('individualPartyid')->unsigned();
            $table->unique('individualPartyid');
            $table->string('individualTitle');
            $table->string('individualFirstname');
            $table->string('individualSecondname');
            $table->string('individualGender');
            $table->date('individualDob');
            $table->boolean('status');
            $table->timestamps();
            $table->softDeletes();
            $table->foreign('individualPartyid')->references('partyId')->on('parties');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('individuals');
    }
}
