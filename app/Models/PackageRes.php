<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PackageRes extends Model
{
    use HasFactory;
    public function userpackageres() { // FK relationship
    return $this->belongsTo(User::class);
 }
    public function packageres() { // FK relationship
    return $this->belongsTo(VacationPackages::class);
 }
}
