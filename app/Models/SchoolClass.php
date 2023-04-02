<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class SchoolClass extends Model
{
    use HasFactory;
    protected $table = 'school_classes';
    protected $primaryKey = 'class_id';
    protected $fillable = ['class', 'section', 'building_block'];
}
