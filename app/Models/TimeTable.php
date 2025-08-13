<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class TimeTable extends Model
{
    protected $fillable = ['day', 'period', 'subject_id'];


public function subject()
{
    return $this->belongsTo(Subject::class);
}
}
