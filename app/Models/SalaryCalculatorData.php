<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class SalaryCalculatorData extends Model
{
    use HasFactory;
    protected $fillable= [
        'job_title',
        'location',
        'publisher_name',
        'publisher_link',
        'salary_period',
        'salary_currency',
        'min_salary',
        'median_salary',
        'max_salary',
    ];
}
