<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Schedule extends Model
{
    use HasFactory;
    protected  $table = 'schedules';
    protected $primaryKey = 'schedule_id';
    protected $fillable = ['teacher_id', 'class_id', 'subject', 'day', 'start_time', 'end_time'];


    public function teachers()
    {
        return $this->belongsTo(Teacher::class, 'teacher_id');
    }

    
}
