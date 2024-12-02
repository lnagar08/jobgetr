<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Internship extends Model
{
    use HasFactory;
    protected $fillable = [
        'user_id',
        'job_title',
        'company',
        'start_date',
        'end_date',
        'is_currently_pursuing_internship',
        'city',
        'state_id',
        'description',
    ];

    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
