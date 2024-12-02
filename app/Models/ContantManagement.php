<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ContantManagement extends Model
{
    use HasFactory;
    protected $fillable = [
        'personal_details',
        'contact_information',
        'professional_summary',
        'employment_history',
        'education',
        'skills',
        'internships',
        'certificate',
        'courses',
        'references',
        'links',
        'languages',
        'hobbies',
        'custom_section',
        'additional_section'
    ];
}
