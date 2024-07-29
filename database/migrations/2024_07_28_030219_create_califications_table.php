<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
use Illuminate\Support\Facades\DB;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('califications', function (Blueprint $table) {
            $table->id();
            //  califications are updated with any vote, by calculate this, each product must be voted, .
            $table->float("calification",1,2);
            $table->unsignedBigInteger('rating');// 1: bad, 2: regular, 3: good
            $table->unsignedBigInteger('product_id');
            $table->foreign('product_id')->references('id')->on('products')->onDelete('restrict')->index();
            //  this column is useful for analisis and moderation
            $table->unsignedBigInteger("user_id");
            $table->foreign("user_id")->references('id')->on('users');
            $table->timestamp("created_at")->default(DB::raw('CURRENT_TIMESTAMP'));
        });
    }
    public function down(): void
    {
        Schema::dropIfExists('califications');
    }
};
