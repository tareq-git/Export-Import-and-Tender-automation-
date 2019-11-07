<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateProductDetailsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('product_details', function (Blueprint $table) {
            $table->bigIncrements('id');

            $table->string('code_sku')->nullable();
            $table->string('description')->nullable();
            $table->string('quantity')->nullable();
            $table->string('unit')->nullable();
            $table->string('hs_code')->nullable();
            $table->string('gross_weight')->nullable();
            $table->string('country_of_origin')->nullable();
            $table->string('price')->nullable();
            $table->string('product_name')->nullable();
            $table->string('amount')->nullable();
            $table->string('proforma_id');

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
        Schema::dropIfExists('product_details');
    }
}
