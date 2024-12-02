<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Reference extends Model
{
    use HasFactory;
    protected $fillable= [
        'user_id',
        'referent_name',
        'referent_company',
        'referent_email',
        'referent_phone_number'
    ];

    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
