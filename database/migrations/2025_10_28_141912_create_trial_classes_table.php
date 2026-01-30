<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    public function up(): void
    {
        Schema::create('trial_classes', function (Blueprint $table) {
            $table->id();

            $table->string('phone', 20)->index();  
            $table->string('email')->nullable()->index();

            $table->foreignId('program_id')
                  ->constrained('programs')
                  ->cascadeOnUpdate()
                  ->restrictOnDelete();

            $table->foreignId('source_id')
                  ->nullable()
                  ->constrained('information_sources')
                  ->nullOnDelete()
                  ->cascadeOnUpdate();

            $table->boolean('has_device')->default(false);  // true=punya perangkat

            $table->string('student_name');
            $table->unsignedTinyInteger('student_age')->nullable(); 
            $table->string('parent_name');

            $table->date('schedule_date')->index();
            $table->time('schedule_time');                  

            $table->timestamps();

            // opsi tambahan
            $table->index(['schedule_date', 'schedule_time'], 'trial_schedule_idx');
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('trial_classes');
    }
};
