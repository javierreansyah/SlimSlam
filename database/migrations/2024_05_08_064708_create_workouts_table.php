<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * 
     */
    public function up()
    {
        if (!Schema::hasTable('workouts')) {
            Schema::create('workouts', function (Blueprint $table) {
                $table->id();
                $table->string('name');
                $table->string('slug')->unique();
                $table->string('difficulty');
                $table->text('description')->nullable();
                $table->string('image')->nullable();
                $table->timestamps();
            });
        }

        if (!Schema::hasTable('exercises')) {
            Schema::create('exercises', function (Blueprint $table) {
                $table->id();
                $table->string('name');
                $table->string('image')->nullable();
                $table->timestamps();
            });
        }

        if (!Schema::hasTable('exercise_workout')) {
            Schema::create('exercise_workout', function (Blueprint $table) {
                $table->id();
                $table->unsignedBigInteger('workout_id');
                $table->unsignedBigInteger('exercise_id');
                $table->unsignedInteger('duration');
                $table->string('description');
                $table->timestamps();

                $table->foreign('workout_id')->references('id')->on('workouts')->onDelete('cascade');
                $table->foreign('exercise_id')->references('id')->on('exercises')->onDelete('cascade');
            });
        }
    }

    /**
     * Reverse the migrations.
     *
     * 
     */
    public function down()
    {
        Schema::dropIfExists('exercise_workout');
        Schema::dropIfExists('workouts');
        Schema::dropIfExists('exercises');
    }
};
