<?php

namespace App\Models;

use Illuminate\Support\Str;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Destination extends Model
{
    use HasFactory, SoftDeletes;

    protected $fillable = [
        'slug',
        'thumbnail',
        'name',
        'highlight_text',
        'location',
        'description',
        'quote',
        'others',
        'is_active',
    ];

    public function setNameAttributes($value)
    {
        $this->attributes['name'] = $value;
        $this->attributes['slug'] = Str::slug($value);
    }

    public function destinationPhotos() 
    {
        return $this->hasMany(DestinationPhoto::class);
    }
}
