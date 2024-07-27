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
        Schema::create('multi_choice_questions', function (Blueprint $table) {
            $table->id();
            $table->foreignId("exam_id");
            $table->string("question");
            $table->double("mark");
            $table->string("ans1");
            $table->string("ans2");
            $table->string("ans3");
            $table->string("ans4");
            $table->string("correct1",50)->nullable(true);
            $table->string("correct2",50)->nullable(true);
            $table->string("correct3",50)->nullable(true);
            $table->string("correct4",50)->nullable(true);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('multi_choice_questions');
    }
};
