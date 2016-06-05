<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class ProductsCategories extends Migration
{
    public function up()
    {
        Schema::create('products_categories', function (Blueprint $table) {
            $table->integer('id_prod');
            $table->integer('id_cat');
            $table->primary(array('id_prod', 'id_cat'));
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
        Schema::drop('products_categories');
    }

}
