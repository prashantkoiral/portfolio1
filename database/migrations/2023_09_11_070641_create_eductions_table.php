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
        Schema::create('educations', function (Blueprint $table) {
            $table->id();
            $table->string('degree'); // Column for the degree
            $table->string('duration'); // Column for the duration (e.g., "2015 - 2016")
            $table->string('school'); // Column for the school (e.g., "Rochester Institute of Technology, Rochester, NY")
            $table->text('description'); // Column for the description
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('educations');
    }
};
