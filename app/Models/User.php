<?php

namespace App\Models;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;

class User extends Authenticatable
{
    use HasFactory, Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name',
        'email',
        'password',
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password',
        'remember_token',
    ];

    /**
     * The attributes that should be cast to native types.
     *
     * @var array
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];
    
    public function favaccommodationuser() { // FK relationship
            return $this->hasMany(FavAccommodations::class);
    }
    public function favpackageuser() { // FK relationship
            return $this->hasMany(FavPackages::class);
    }
    public function accommodationreservationuser() { // FK relationship
            return $this->hasMany(AccommodationReservation::class);
    }
    public function accommodationfeedbackuser() { // FK relationship
            return $this->hasMany(AccommodationFeedback::class);
    }
    public function packagesresuser() { // FK relationship
            return $this->hasMany(PackageRes::class);
    }
    public function packagefeedbackuser() { // FK relationship
            return $this->hasMany(PackageFeedback::class);
    }
    
}
