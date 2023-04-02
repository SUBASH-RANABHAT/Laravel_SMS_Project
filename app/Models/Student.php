<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Student extends Model
{
    use HasFactory;

    protected $table = 'student';
    protected $primaryKey = 'id';
    protected $fillable = ['name', 'email','roll_no','password','image'];

}
