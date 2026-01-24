<?php

namespace App\Models;

use Illuminate\Support\Arr;
use Illuminate\Support\Str;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Storage;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class SiteSetting extends Model
{
    use HasFactory;

    protected $table = 'site_settings';

    protected $fillable = [
        'key',
        'settings',
    ];

    protected $casts = [
        'settings' => 'array',
    ];

    /**
     * Shortcut: ambil settings perusahaan (key: company_profile)
     */
    public static function company(): ?self
    {
        return static::where('key', 'company_profile')->first();
    }

    /**
     * Shortcut: ambil array murni-nya saja.
     */
    public static function companySettings(): array
    {
        return optional(static::company())->settings ?? [];
    }
}
