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
        Schema::table('employees', function (Blueprint $table){
            $table->foreign('last_theme_id')->references('id')->on('themes');
        });

        Schema::table('questions', function (Blueprint $table){
            $table->foreign('theme_id')->references('id')->on('themes');
        });

        Schema::table('responses', function (Blueprint $table){
            $table->foreign('question_id')->references('id')->on('questions');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
    }
};
