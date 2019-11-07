<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateShippersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('shippers', function (Blueprint $table) {
            
           $table->bigIncrements('id');

            $table->string('business_name');
            $table->string('office_add');
            $table->string('factory_add');
            $table->string('bin_vat_no');
            $table->string('erc_no');
            $table->string('erc_date');
            $table->string('irc_no');
            $table->string('irc_date');
            $table->string('phone_no');
            $table->string('fax_no');
            $table->string('email');
            $table->string('contact_person');

            $table->string('user_id');

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
        Schema::dropIfExists('shippers');
    }
}
