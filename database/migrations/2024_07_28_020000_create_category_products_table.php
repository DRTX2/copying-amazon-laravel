<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('category_products', function (Blueprint $table) {
            $table->smallIncrements('id');
            $table->string('name',50);
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('category_products');
    }
};
