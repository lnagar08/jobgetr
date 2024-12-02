<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ResumeTemplate extends Model
{
    use HasFactory;
    protected $fillable = [
        'template_path',
        'pdf_file_path',
        'template_preview_image'
    ];
}
