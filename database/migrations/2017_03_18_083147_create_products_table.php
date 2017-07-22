<?php

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
            $table->increments('id');
             $table->string('productName');
            $table->Integer('categoryid');
            $table->Integer('manufacturid');
            $table->float('productPrice',10,2);
            $table->Integer('productQuentity');
            $table->text('productShortDescription');
             $table->text('productLongDescription');
             $table->text('productImage');
             $table->tinyInteger('publicationStatus');
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
        Schema::drop('products');
    }
}
