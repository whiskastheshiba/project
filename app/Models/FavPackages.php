<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class FavPackages extends Model
{
    use HasFactory;
    public function userfavpackages() { // FK relationship
    return $this->belongsTo(User::class);
 }
    public function vacpackages() { // FK relationship
    return $this->belongsTo(VacationPackages::class);
 }

}
