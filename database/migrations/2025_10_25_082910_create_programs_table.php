<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('programs', function (Blueprint $table) {
            $table->id();

            // Key / codename: coding, animation, iot, roblox, design
            $table->string('key')->unique();

            $table->string('name');           // "Coding"
            $table->string('slug')->unique(); // "coding-kids" (opsional, tapi useful)

            // Program aktif/tidak (global)
            $table->boolean('is_active')->default(true)->index();

            // Tambahan: apakah ini muncul di home?
            $table->boolean('is_home')->default(false)->index();
            // true  = muncul di home
            // false = tidak muncul di home

            // Tambahan: apakah ini juga dipakai untuk trial?
            $table->boolean('is_trial')->default(true)->index();
            // true  = dipakai untuk trial class + landing
            // false = tampil di landing saja (tidak muncul di dropdown trial)

            $table->unsignedTinyInteger('sort_order')->default(0);

            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('programs');
    }
};
