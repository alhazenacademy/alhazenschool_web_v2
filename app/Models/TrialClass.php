<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class TrialClass extends Model
{
    protected $fillable = [
        'phone','email',
        'program_id','source_id',
        'has_device',
        'student_name','student_age','parent_name',
        'schedule_date','schedule_time'
    ];

    // protected $fillable = [
    //     'phone','email',
    //     'program_id','source_id',
    //     'has_device',
    //     'student_name','student_age','parent_name',
    //     'schedule_date','schedule_time', 'school','address','promoCode'
    // ];

    protected $casts = [
        'has_device'   => 'boolean',
        'schedule_date'=> 'date',
    ];

    public function program()
    {
        return $this->belongsTo(Program::class);
    }

    public function source()
    {
        return $this->belongsTo(InformationSource::class, 'source_id');
    }
}
