<<<<<<< HEAD
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
        Schema::create('discriptive_questions', function (Blueprint $table) {
            $table->id();
            $table->foreignId("exam_id");
            $table->string("question");
            $table->string("ans");
            $table->double("mark");
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('discriptive_questions');
    }
};
=======
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
        Schema::create('discriptive_questions', function (Blueprint $table) {
            $table->id();
            $table->foreignId("exam_id");
            $table->string("question");
            $table->string("ans");
            $table->double("mark");
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('discriptive_questions');
    }
};
>>>>>>> 2efe76850da2bea73bf7bfa35f471564c0d749e8
