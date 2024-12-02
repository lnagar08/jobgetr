<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Certificate extends Model
{
    use HasFactory;
    protected $fillable = [
        'user_id',
        'name',
        'organization',
        'issued_date',
        'url',
        'description'
    ];

    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
