<?php

namespace App\Models;

use Illuminate\Support\Str;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Yacht extends Model
{
    use HasFactory, SoftDeletes;

    protected $fillable = [
        'slug',
        'thumbnail',
        'name',
        'model',
        'built_date',
        'capacity',
        'cabins',
        'location',
        'description',
        'price',
        'is_active',
        'is_full_booked',
        'crew',
        'length',
        'boat_builder_and_designer',
        'superstructure',
        'machinery_and_electronics',
        'speed',
        'dive_equipment',
        'tenders',
        'navigation',
        'safety_equipment_and_features',
        'water_toys',
        'others',
    ];

    public function setNameAttributes($value)
    {
        $this->attributes['name'] = $value;
        $this->attributes['slug'] = Str::slug($value);
    }

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