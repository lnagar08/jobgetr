<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Education extends Model
{
    use HasFactory;
    protected $fillable = [
        'user_id',
        'institution',
        'degree',
        'start_date',
        'end_date',
        'is_current_studying',
        'city',
        'state_id',
        'description',
    ];

    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
