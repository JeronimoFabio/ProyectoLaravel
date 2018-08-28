<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateProductsTable extends Migration
{
    public function up()
    {
        Schema::create('products', function (Blueprint $table) {
            $table->increments('id');
            //***// */
            $table->string('name');
            $table->text('description')->charset('utf8');
            $table->string('photo');
            $table->float('price')->unsigned();
            $table->integer('stock')->unsigned()->default(0);
            $table->integer('category_id')->unsigned()->default(1);
            //***// */
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('products');
    }
}