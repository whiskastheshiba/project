<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class AccommodationFeedback extends Model
{
    use HasFactory;
    public function useraccommodationfeedback() { // FK relationship
    return $this->belongsTo(User::class);
 }
    public function accommodationfeedback() { // FK relationship
    return $this->belongsTo(Accommodation::class);
 }
}
