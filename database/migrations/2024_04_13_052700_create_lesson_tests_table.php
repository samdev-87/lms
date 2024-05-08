<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('lesson_tests', function (Blueprint $table) {
            $table->id();
            $table->foreignIdFor(\App\Models\Lesson::class);
            $table->string('question');
            $table->json('answers');
            $table->unsignedTinyInteger('correct_answer');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('lesson_tests');
    }
};
