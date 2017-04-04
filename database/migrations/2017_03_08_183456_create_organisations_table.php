<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateOrganisationsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {

        Schema::enableForeignKeyConstraints();

        Schema::create('organisations', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('organisationPartyid')->unsigned();
            $table->unique('organisationPartyid');
            $table->string('orgnanisationName');
            $table->timestamps();
            $table->softDeletes();
            $table->foreign('organisationPartyid')->references('partyId')->on('parties');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('organisations');
    }
}
