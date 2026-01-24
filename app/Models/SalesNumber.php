<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class SalesNumber extends Model
{
    protected $fillable = [
        'phone_number',
        'sales_name',
        'is_active'
    ];
    public function scopeActive($q)
    {
        return $q->where('is_active', 1);
    }
}
