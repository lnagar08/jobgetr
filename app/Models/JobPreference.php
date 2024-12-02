<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class JobPreference extends Model
{
    use HasFactory;
    protected $fillable= [
        'user_id',
        'job_titles',
        'gender',
        'race_Ethnicity',
        'salary_range',
        'hourly_rate',
        'job_level',
        'status',
        'legal_authorization',
        'visa_sponsorship',
        'ethnicity',
        'protected_veterans',
        'languages',
        'disability',
    ];

    public function user()
    {
        return $this->belongsTo(User::class, 'user_id');
    }
}
