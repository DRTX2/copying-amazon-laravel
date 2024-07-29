<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{

    public function up(): void
    {
        Schema::create('state_products', function (Blueprint $table) {
            // Clave primaria de tipo smallInteger auto-incremental
            $table->tinyIncrements('id'); 
            $table->string('name',30);
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('state_products');
    }
};
