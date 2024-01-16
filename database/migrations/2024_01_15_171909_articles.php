<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        //
        Schema::create('articles', function (Blueprint $table) {
            $table->id("article_id");
            $table->string('article_name');
            $table->string('content');
            $table->integer('created_by');
            $table->integer('edited_by');
            $table->date('date_verified_at');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        //
        Schema::dropIfExists('user_types');
    }
};
