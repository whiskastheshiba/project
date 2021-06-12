<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PackageFeedback extends Model
{
    use HasFactory;
    public function userpackagefeedback() { // FK relationship
    return $this->belongsTo(User::class);
 }
    public function packagefeedback() { // FK relationship
    return $this->belongsTo(VacationPackages::class);
 }
}
