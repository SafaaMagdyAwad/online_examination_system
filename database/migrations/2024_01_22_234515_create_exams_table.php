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
        Schema::create('exams',
         function (Blueprint $table) {
            $table->id();
            $table->string('title');
            $table->integer('year_id');
            $table->time('start');
            $table->time('end');
            $table->softDeletes();
            $table->timestamps();
            
        });

    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('exams');
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
        Schema::create('exams',
         function (Blueprint $table) {
            $table->id();
            $table->string('title');
            $table->integer('year_id');
            $table->time('start');
            $table->time('end');
            $table->timestamps();
            
        });

    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('exams');
    }
};
>>>>>>> 2efe76850da2bea73bf7bfa35f471564c0d749e8
