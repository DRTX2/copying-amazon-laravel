<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('countries', function (Blueprint $table) {
            $table->smallIncrements("id");
            $table->string('name');
            $table->string('currencies');
            $table->float('iva',2,2);
            $table->string('prefix_phone_number');
        });
    }
    public function down(): void
    {
        Schema::dropIfExists('countries');
    }
};
