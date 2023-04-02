<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Teacher extends Model
{
    use HasFactory;
    protected $table = 'teachers';
    protected $primaryKey = 'teacher_id';
    protected $fillable = ['name', 'category', 'reg_no', 'qualification', 'education', 'experience'];
}
