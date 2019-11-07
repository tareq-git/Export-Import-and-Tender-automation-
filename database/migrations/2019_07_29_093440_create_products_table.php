<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateProductsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('products', function (Blueprint $table) {
            $table->bigIncrements('id');

            $table->string('code_sku');
            $table->string('name');
            $table->string('description');
            $table->string('hs_code_bd');
            $table->string('hs_code');
            $table->string('photo')->nullable();
            $table->string('unit');
            $table->string('net_weight');
            $table->string('gross_weight');
            $table->string('cbm');
            $table->string('cost_of_product');
            $table->string('cost_of_packing');
            $table->string('cash_incentive');

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
        Schema::dropIfExists('products');
    }
}
