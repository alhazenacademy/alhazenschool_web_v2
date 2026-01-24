<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Faq extends Model
{
    use HasFactory;

    protected $table = 'faqs';

    protected $fillable = [
        'question',
        'answer',
        'is_active',
        'sort_order',
    ];

    protected $casts = [
        'is_active' => 'boolean',
        'sort_order' => 'integer',
    ];

    /** Scope: hanya yang aktif */
    public function scopeActive($query)
    {
        return $query->where('is_active', true);
    }

    /** Scope: urut default (sort_order lalu created_at) */
    public function scopeOrdered($query)
    {
        return $query->orderByRaw('COALESCE(sort_order, 999999) ASC')
                    ->orderBy('created_at', 'asc');
    }
}
