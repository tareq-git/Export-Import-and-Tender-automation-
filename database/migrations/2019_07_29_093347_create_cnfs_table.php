<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCnfsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('cnfs', function (Blueprint $table) {
           $table->bigIncrements('id');

            $table->string('name');
            $table->string('address');
            $table->string('contact_person');
            $table->string('email');
            $table->string('phone');
            $table->string('mobile');
            $table->string('working_port');
            $table->string('reg_no');

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
        Schema::dropIfExists('cnfs');
    }
}
