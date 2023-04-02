<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Notice extends Model
{
    use HasFactory;
    protected $table = 'notice';
    protected $primaryKey = 'id';
    protected $fillable = [
        'notice1_title', 'content1',
        'notice2_title', 'content2',
        'notice3_title', 'content3',
        'notice4_title', 'content4',
        'notice5_title', 'content5',
        'notice6_title', 'content6'
    ];
}
