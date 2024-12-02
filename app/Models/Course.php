<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Course extends Model
{
    use HasFactory;
    protected $fillable = [
        'user_id',
        'institution',
        'course',
        'start_date',
        'end_date',
        'is_currently_pursuing_course',
    ];

    public function user()
    {
        return $this->belongsTo(User::class);
    }

}
