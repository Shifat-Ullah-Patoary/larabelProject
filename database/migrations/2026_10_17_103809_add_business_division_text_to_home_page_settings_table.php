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
        Schema::table('home_page_settings', function (Blueprint $table) {
            // Travel & Tours
            $table->string('travel_title')
                ->default('Diamond Travel & Tours');
            $table->text('travel_description')->nullable();

            // Transport
            $table->string('transport_title')
                ->default('Diamond Transport');
            $table->text('transport_description')->nullable();

            // Construction
            $table->string('construction_title')
                ->default('Brick, Sand & Concrete');
            $table->text('construction_description')->nullable();
        });
    }

    public function down(): void
    {
        Schema::table('home_page_settings', function (Blueprint $table) {
            $table->dropColumn([
                'travel_title',
                'travel_description',
                'transport_title',
                'transport_description',
                'construction_title',
                'construction_description',
            ]);
        });
    }
};
