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
        Schema::create('tutors', function (Blueprint $table) {
            $table->id();
            // Identitas dasar
            $table->string('name', 120);
            $table->string('slug', 140)->unique();

            // Profil & tampilan
            $table->unsignedTinyInteger('years')->default(1);
            $table->text('skills')->nullable();
            $table->string('photo', 255)->nullable();
            $table->string('bg_color', 9)->default('#FACC15');
            $table->enum('gender', ['male', 'female'])->index();

            // Deskripsi
            $table->text('bio')->nullable();

            // Kontrol tampilan
            $table->boolean('is_active')->default(true)->index();
            $table->unsignedSmallInteger('sort_order')->default(0)->index();

            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('tutors');
    }
};
