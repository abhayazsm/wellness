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
        Schema::create('appointment_forms', function (Blueprint $table) {
            $table->id();
            $table->string('name'); // Name input placeholder
            $table->string('last_name'); // Last Name input placeholder
            $table->string('email'); // Email input placeholder
            $table->string('phone'); // Phon input placeholder
            $table->string('service'); // Service input placeholder
            $table->string('date'); // Date input placeholder
            // $table->string('time'); // Button text
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('appointment_forms');
    }
};
