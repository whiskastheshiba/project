<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Accommodation extends Model
{
    use HasFactory;
    
    protected $fillable=['accomodation_name', 'accommodation_city', 'accommodation_address', 'accommodation_price', 'accommmodation_description'];
            public function accomodation() { // FK relationship
            return $this->hasMany(FavAccommodations::class);
    }
    public function accomodationreservation() { // FK relationship
            return $this->hasMany(AccommodationReservation::class);
    }
    public function accomodationfeedback() { // FK relationship
            return $this->hasMany(AccommodationFeedback::class);
    }
}