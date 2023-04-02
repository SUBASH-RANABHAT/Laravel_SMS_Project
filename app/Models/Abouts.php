<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Abouts extends Model
{
    use HasFactory;
    protected $table = 'abouts';
    protected $primaryKey = 'id';
    protected $fillable = ['about_title', 'content', 'image'];
}
