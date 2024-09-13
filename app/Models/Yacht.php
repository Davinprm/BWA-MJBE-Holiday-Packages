<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Yacht extends Model
{
    use HasFactory, SoftDeletes;

    protected $guarded = [];

    public function yachtPhotos() 
    {
        return $this->hasMany(YachtPhoto::class);
    }
    public function yachtFacilities() 
    {
        return $this->hasMany(YachtFacilities::class);
    }
    public function yachtBookings() 
    {
        return $this->hasMany(YachtBooking::class);
    }
}