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
        Schema::create('program_infos', function (Blueprint $table) {
            $table->id();

            $table->foreignId('program_id')
                ->constrained()
                ->cascadeOnDelete();

            // CONTEXT (opsional, kalau nanti mau beda versi landing)
            $table->string('context')->default('kids_landing');
            // bisa pakai: 'kids_landing', 'adult_landing', dll

            // Bagian konten / isi
            $table->string('title');                  // "Coding"
            $table->string('subtitle')->nullable();   // "Create with Logic"
            $table->string('short_tagline')->nullable(); // "Create with logic" versi pendek

            $table->string('modules_label')->nullable();   // "50+"
            $table->string('students_label')->nullable();  // "1200"
            $table->text('description')->nullable();

            $table->json('tools')->nullable();        // ["Scratch", "Thunkable", "MakeCode", "EduBlocks"]

            $table->string('price_label')->nullable(); // "Rp. 10.000.000"
            $table->string('cta_text')->nullable();    // "Daftar Kelas Gratis"
            $table->string('cta_href')->nullable();    // null / url

            // Bagian visual / tampilan landing tab
            $table->string('icon_path')->nullable();        // assets/kids/index-program/icon-program1.png
            $table->string('child_image_path')->nullable(); // assets/kids/index-program/anak.png
            $table->string('bg_class')->nullable();         // bg-[#38BDF8]
            $table->string('text_color_class')->nullable(); // text-[#F9FAFB]

            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('program_infos');
    }
};
