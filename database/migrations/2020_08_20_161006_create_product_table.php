<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateProductTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('products', function (Blueprint $table) {
            $table->id();
            $table->string('product_name');
            $table->string('product_image')->nullable()->default(NULL);
            $table->bigInteger('quantity')->nullable()->default(NULL);
            $table->string('sku')->nullable()->default(NULL);
            $table->string('category')->nullable()->default(NULL);
            // here will be category id with foreign key of category_table
            $table->string('sub_category')->nullable()->default(NULL);
            // here will be sub  category id with foreign key of category_table
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
        Schema::dropIfExists('product');
    }
}
