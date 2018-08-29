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
            $table->increments('id')->comment('PK');
            $table->tinyInteger('category_id')->unsigned()->comment('FK');

            $table->string('alias', 16)->comment('for the system use only');
            $table->string('name', 32)->comment('on the russian language');
            $table->string('translit', 32)->comment('for SEO and marketing');
            $table->enum('available', ['yes','no'])->default('no')->comment('display on the site marker');

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
