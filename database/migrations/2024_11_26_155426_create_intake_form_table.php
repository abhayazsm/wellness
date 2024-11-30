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
        Schema::create('intake_forms', function (Blueprint $table) {
            $table->id();
            $table->string('full_name');
            $table->date('dob');
            $table->integer('age');
            $table->string('gender');
            $table->text('address');
            $table->string('city_state_zip');
            $table->string('phone');
            $table->string('email');
            $table->text('health_concerns')->nullable();
            $table->text('health_goals')->nullable();
            $table->text('condition_details')->nullable();
            $table->text('medication_list')->nullable();
            $table->text('allergy_details')->nullable();
            $table->text('surgery_details')->nullable();
            $table->text('exercise_routine')->nullable();
            $table->string('diet')->nullable();
            $table->string('smoke')->default(false);
            $table->string('alcohol')->default(false);
            $table->string('recreational_drugs')->default(false);
            $table->integer('sleep_hours')->nullable();
            $table->integer('stress_level')->nullable();
            $table->enum('emotional_challenges', ['Yes', 'No', 'Not Sure'])->nullable();
            $table->text('emotional_explanation')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('intake_forms');
    }
};
