<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCatalogueItemsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('catalogue_items', function (Blueprint $table) {
            $table->bigIncrements('id');

            $table->string('code_sku');
            $table->string('photo');
            $table->string('description');
            $table->string('moq');
            $table->string('price');
            $table->string('catalogue_id');

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
        Schema::dropIfExists('catalogue_items');
    }
}
