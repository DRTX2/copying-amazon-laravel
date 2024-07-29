<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    
    public function up(): void
    {
        Schema::create('products', function (Blueprint $table) {
            $table->id();
            $table->float("cost",10,2);
            $table->integer("stock");
            $table->string("description");

            $table->unsignedTinyInteger("state_product_id")->index();
            $table->foreign('state_product_id')->references('id')->on('state_products')->onDelete('restrict');
            
            $table->unsignedSmallInteger("category_product_id")->index();
            $table->foreign('category_product_id')->references('id')->on('category_products')->onDelete('restrict');
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('products');
    }
};

