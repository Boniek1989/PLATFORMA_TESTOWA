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
        Schema::create('AGQuestions', function (Blueprint $table) {
            $table->id();
            $table->text('question');
            $table->text('TrueAnswer');
            $table->text('FalseAnswer1');
            $table->text('FalseAnswer2');
            $table->text('FalseAnswer3');
            $table->date('updated_at');
            $table->date('created_at');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        //
    }
};
