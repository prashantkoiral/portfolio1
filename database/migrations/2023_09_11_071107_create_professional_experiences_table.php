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
        Schema::create('professional_experiences', function (Blueprint $table) {
            $table->id();
            $table->string('position'); // Column for the position (e.g., "Senior Graphic Design Specialist")
            $table->string('duration'); // Column for the duration (e.g., "2019 - Present")
            $table->string('company'); // Column for the company (e.g., "Experion, New York, NY")
            $table->text('responsibilities'); // Column for responsibilities
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('professional_experiences');
    }
};
