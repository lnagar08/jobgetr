<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class UserResumeTemplate extends Model
{
    use HasFactory;
    protected $fillable = [
        'user_id',
        'template_id',
        'color_code',
        'font_family',
        'layout',
        'line_height'
    ];
}
