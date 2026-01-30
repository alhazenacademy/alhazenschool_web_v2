<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    public function up(): void
    {
        Schema::create('articles', function (Blueprint $table) {
            $table->id();

            $table->foreignId('user_id')->nullable()->constrained()->nullOnDelete();

            $table->string('title');                   
            $table->string('slug')->unique();          
            $table->string('excerpt', 500)->nullable(); 
            $table->longText('content');                

            $table->string('cover_image')->nullable();

            $table->enum('status', ['draft','scheduled','published','archived'])
                  ->default('draft')->index();
            $table->timestamp('published_at')->nullable()->index();

            // UX/analitik
            $table->unsignedSmallInteger('reading_time')->nullable(); // menit
            $table->unsignedBigInteger('views')->default(0);

            // SEO
            $table->string('meta_title', 255)->nullable();
            $table->string('meta_description', 255)->nullable();

            // Flag
            $table->boolean('is_featured')->default(false)->index();

            $table->timestamps();
            $table->softDeletes();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('articles');
    }
};

