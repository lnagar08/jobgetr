<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class InterviewUserPlan extends Model
{
    use HasFactory;
    protected $fillable = [
        'user_id',
        'plan_id',
        'price',
        'to_date',
        'status',
        'from_date',
        'payment_id',
    ];
    /**
     * The attributes that should be cast.
     *
     * @var array
     */

    public function users()
    {
        return $this->belongsToMany(User::class);
    }
}
