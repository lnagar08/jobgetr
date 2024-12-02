<?php

namespace App\Models;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;
use Laravel\Cashier\Billable;


class User extends Authenticatable
{
     use HasApiTokens, HasFactory, Notifiable ,Billable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'first_name',
        'last_name',
        'slug',
        'profile_image',
        'email',
        'password',
        'desired_job_title',
        'nationality',
        'driver_license',
        'date_of_birth',
        'phone_number',
        'country',
        'city',
        'address',
        'postal_code',
        'professional_summary',
        'hobbies',
        'otp_token',
        'expire_time',
        'status',
        'project_url',
        'completion_status',
        'upload_resume',
        'upload_resume_verify',
    ];

    /**
     * The attributes that should be hidden for serialization.
     *
     * @var array<int, string>
     */
    protected $hidden = [
        'password',
        'remember_token',
    ];

    /**
     * The attributes that should be cast.
     *
     * @var array<string, string>
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];

    public function employmentHistories()
    {
        return $this->hasMany(EmploymentHistory::class, 'user_id');
    }

    public function educations()
    {
        return $this->hasMany(Education::class, 'user_id');
    }

    public function courses()
    {
        return $this->hasMany(Course::class, 'user_id');
    }

    public function customSections()
    {
        return $this->hasMany(CustomSection::class, 'user_id');
    }

    public function internships()
    {
        return $this->hasMany(Internship::class, 'user_id');
    }

    public function languages()
    {
        return $this->hasMany(Language::class, 'user_id');
    }

    public function links()
    {
        return $this->hasMany(Link::class, 'user_id');
    }

    public function references()
    {
        return $this->hasMany(Reference::class, 'user_id');
    }

    public function skills()
    {
        return $this->hasMany(Skill::class, 'user_id');
    }

    public function certificates()
    {
        return $this->hasMany(Certificate::class, 'user_id');
    }
    
 

    public function userplan()
    {
        return $this->hasMany(Userplan::class, 'user_id');
    }

    public function plan()
    {
        return $this->belongsTo(Plan::class);
    }
    public function transactions()
    {
        return $this->hasMany(Transaction::class);
    }
    
    
    public function jobPreference()
    {
        return $this->hasOne(JobPreference::class, 'user_id');
    }
}
