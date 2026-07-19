<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    private array $tables = ['safaris', 'trekking_routes', 'zanzibar_packages'];

    public function up(): void
    {
        foreach ($this->tables as $table) {
            Schema::table($table, function (Blueprint $t) {
                $t->longText('overview')->nullable()->after('description');
                $t->unsignedTinyInteger('duration_days')->nullable();
                $t->unsignedTinyInteger('duration_nights')->nullable();
                $t->json('pricing_tiers')->nullable();
                $t->json('itinerary')->nullable();
                $t->json('includes')->nullable();
                $t->json('excludes')->nullable();
                $t->json('accommodations')->nullable();
                $t->json('gallery')->nullable();
                $t->string('category')->nullable();
                $t->string('theme')->nullable();
                $t->string('skill_level')->nullable();
            });
        }
    }

    public function down(): void
    {
        foreach ($this->tables as $table) {
            Schema::table($table, function (Blueprint $t) {
                $t->dropColumn([
                    'overview', 'duration_days', 'duration_nights',
                    'pricing_tiers', 'itinerary', 'includes', 'excludes',
                    'accommodations', 'gallery', 'category', 'theme', 'skill_level',
                ]);
            });
        }
    }
};
