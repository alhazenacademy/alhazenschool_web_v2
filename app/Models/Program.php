<?php

namespace App\Models;

use App\Models\ProgramInfo;
use Illuminate\Support\Str;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\Relations\HasOne;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Program extends Model
{
    use HasFactory;

    protected $fillable = [
        'key',
        'name',
        'slug',
        'is_active',
        'is_home',
        'is_lainnya',
        'is_trial',
        'sort_order',
    ];

    protected $casts = [
        'is_active' => 'boolean',
        'is_home'   => 'boolean',
        'is_trial'  => 'boolean',
    ];

    /** Relasi ke detail/landing info (1:1)
     */
    public function info(): HasOne
    {
        return $this->hasOne(ProgramInfo::class);
    }

    /** Scope: hanya yang aktif
     */
    public function scopeActive(Builder $query): Builder
    {
        return $query->where('is_active', true);
    }

    /** Scope: hanya yang home
     */
    public function scopeHome(Builder $query): Builder
    {
        return $query->where('is_home', true);
    }

    /** Scope: hanya yang home
     */
    public function scopeLainnya(Builder $query): Builder
    {
        return $query->where('is_lainnya', true);
    }

    /** Scope: yang muncul di Trial Class
     */
    public function scopeForTrial(Builder $query): Builder
    {
        return $query->where('is_trial', true);
    }

    /** Scope: urut default
     */
    public function scopeOrdered(Builder $query): Builder
    {
        return $query->orderBy('sort_order')->orderBy('name');
    }

    /** Auto set slug kalau belum diisi (berguna buat Filament form)
     */
    protected static function booted(): void
    {
        static::creating(function (Program $program) {
            if (empty($program->slug)) {
                $program->slug = Str::slug($program->name);
            }
        });

        static::updating(function (Program $program) {
            if ($program->isDirty('name') && empty($program->slug)) {
                $program->slug = Str::slug($program->name);
            }
        });
    }
}
