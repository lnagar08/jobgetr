<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class InterviewPlan extends Model
{
    use HasFactory;
    protected $fillable = [
        'name',
        'shared_Interviews',
        'description',
        'price',
        'stripe_price_id',
        'stripe_product_id',
        'price'
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
