<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCartsTable extends Migration
{

    public function up()
    {
        Schema::create('cart', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('user_id')->unsigned()->default(1);
            $table->integer('product_id')->unsigned()->default(1);
            $table->integer('carro')->unsigned();
            $table->smallInteger('cantidad')->default(1);
            $table->smallInteger('status');
                        //0 -cart
                        //1 -prosesando
                        //2 -comprado
                        //3 -entregado
                        //4 -finalizdo
                        //7 -FAILED!!!
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('cart');
    }
}
