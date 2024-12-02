<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Userplan extends Model
{
    use HasFactory;
    protected $fillable = [
        'user_id',
        'plan_id',
        'price',
        'to_date',
        'from_date',
        'payment_id',
    ];

     public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function plan()
    {
        return $this->belongsTo(Plan::class);
    }


}
