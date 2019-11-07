<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateProformasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('proformas', function (Blueprint $table) {
            $table->bigIncrements('id');

            $table->string('buyer_name');
            $table->string('seller_name');
            $table->string('invoice_no');
            $table->string('invoice_date');
            $table->string('buyer_ref_no');
            $table->string('delivery_date');
            $table->string('method_of_shipping');
            $table->string('port_of_loading');
            $table->string('port_of_discharge');
            $table->string('terms');
            $table->string('other_condition')->nullable();
            $table->string('signature')->nullable();

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
        Schema::dropIfExists('proformas');
    }
}
