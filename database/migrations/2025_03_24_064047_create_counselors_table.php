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
        Schema::create('counselors', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('qualification');
            $table->json('languages');
            $table->json('counseling_modes');
            $table->json('expertise');
            $table->json('approach');
            $table->text('about');
            $table->text('why_counseling');
            $table->text('close_concerns');
            $table->text('handle_stress');
            $table->string('profile_image')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('counselors');
    }
};
