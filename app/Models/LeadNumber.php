<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class LeadNumber extends Model
{
    protected $fillable = [
        'phone_number', 'source'
    ];
}
