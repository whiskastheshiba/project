<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class AccommodationReservation extends Model
{
    use HasFactory;
    public function useraccommodationres() { // FK relationship
    return $this->belongsTo(User::class);
 }
    public function accommodationres() { // FK relationship
    return $this->belongsTo(Accommodation::class);
 }
}
