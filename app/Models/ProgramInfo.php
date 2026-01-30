<?php

namespace App\Models;

use App\Models\Program;
use Illuminate\Support\Str;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Storage;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class ProgramInfo extends Model
{
    use HasFactory;

    protected $fillable = [
        'program_id',
        'context',

        'title',
        'subtitle',
        'short_tagline',

        'modules_label',
        'students_label',
        'description',

        'tools',

        'price_label',
        'cta_text',
        'cta_href',

        'icon_path',
        'child_image_path',
        'bg_class',
        'text_color_class',
    ];

    protected $casts = [
        'tools' => 'array',
    ];

    protected static function booted(): void
    {
        // Hapus file lama saat child_image_path diubah / dikosongkan
        static::updating(function (self $model) {
            $originalPath = $model->getOriginal('child_image_path');
            $newPath = $model->child_image_path;

            // Kalau tidak berubah, tidak perlu apa-apa
            if ($originalPath === $newPath || empty($originalPath)) {
                return;
            }

            // Hanya urus path di uploads/program (storage disk 'public')
            if (!Str::startsWith($originalPath, 'uploads/program')) {
                return;
            }

            // Cek apakah masih ada record lain yang pakai path yang sama
            $stillUsed = self::query()
                ->where('child_image_path', $originalPath)
                ->whereKeyNot($model->getKey())
                ->exists();

            if (!$stillUsed) {
                Storage::disk('public')->delete($originalPath);
            }
        });

        // Hapus file saat ProgramInfo dihapus
        static::deleting(function (self $model) {
            $path = $model->child_image_path;

            if (empty($path)) {
                return;
            }

            if (!Str::startsWith($path, 'uploads/program')) {
                return;
            }

            // Cek apakah masih dipakai record lain
            $stillUsed = self::query()
                ->where('child_image_path', $path)
                ->whereKeyNot($model->getKey())
                ->exists();

            if (!$stillUsed) {
                Storage::disk('public')->delete($path);
            }
        });
    }


    public function getChildImageUrlAttribute(): string
    {
        $path = $this->child_image_path ?? null;

        if (!empty($path)) {
            // Kalau sudah absolute URL (CDN, dll)
            if (Str::startsWith($path, ['http://', 'https://'])) {
                return $path;
            }

            // Kalau file ada di storage/app/public/...
            if (Storage::disk('public')->exists($path)) {
                return asset('storage/' . ltrim($path, '/'));
            }

            // Kalau path diarahkan ke public/assets (optional)
            if (Str::startsWith($path, 'assets/')) {
                return asset($path);
            }
        }

        // Fallback default anak
        return asset('assets/kids/program-detail/anak.webp');
    }

    /** Relasi balik ke Program
     */
    public function program(): BelongsTo
    {
        return $this->belongsTo(Program::class);
    }
}
