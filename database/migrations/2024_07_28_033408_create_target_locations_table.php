<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('target_locations', function (Blueprint $table) {
            $table->id();
            $table->string('zip_code');

            $table->unsignedbigInteger('user_id');
            $table->foreign('user_id')->references('id')->on('users')->onDelete('restrict');

            $table->unsignedSmallInteger('country_id');
            $table->foreign('country_id')->references('id')->on('countries')->onDelete('restrict');
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('target_locations');
    }
};
