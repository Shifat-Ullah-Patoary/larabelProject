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
        Schema::create('about_page_settings', function (Blueprint $table) {
            $table->id();

            // Hero Section
            $table->string('hero_badge')->nullable();
            $table->string('hero_title_part_1')->nullable();
            $table->string('hero_title_part_2')->nullable();
            $table->text('hero_description')->nullable();
            $table->string('hero_bg_image')->nullable();

            // Story / Intro Section
            $table->string('story_badge')->nullable();
            $table->string('story_title')->nullable();
            $table->text('story_description')->nullable();
            $table->json('story_features')->nullable(); // Stores checkmarks array

            // Mission Card
            $table->string('mission_title')->nullable();
            $table->text('mission_description')->nullable();
            $table->string('mission_image')->nullable();

            // Founder Section
            $table->string('founder_name')->nullable();
            $table->string('founder_designation')->nullable();
            $table->text('founder_bio_1')->nullable();
            $table->text('founder_bio_2')->nullable();
            $table->text('founder_quote')->nullable();
            $table->string('founder_image')->nullable();

            $table->timestamps();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('about_page_settings');
    }
};
