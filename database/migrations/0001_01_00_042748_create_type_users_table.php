<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('type_users', function (Blueprint $table) {
            //como es autoincremental obio no inicia en -2522...0
            $table->tinyIncrements("id");
            $table->string('name',18)->unique();
        });
    }
    public function down(): void
    {
        Schema::dropIfExists('type_users');
    }
};
