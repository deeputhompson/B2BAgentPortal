<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateNamedcontactsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('namedcontacts', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('namedcontactPartyid')->unsigned();
            $table->unique('namedcontactPartyid');
            $table->string('namedcontactTitle');
            $table->string('namedcontactFirstname');
            $table->string('namedcontactSecondname');
            $table->string('namedcontactGender');
            $table->date('namedcontactDob');
            $table->boolean('status');
            $table->timestamps();
            $table->softDeletes();
            $table->foreign('namedcontactPartyid')->references('partyId')->on('parties');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('namedcontacts');
    }
}
