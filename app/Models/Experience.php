<?php

namespace App\Models;

use Illuminate\Support\Str;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Experience extends Model
{
    use HasFactory, SoftDeletes;

    protected $fillable = [
        'slug',
        'thumbnail',
        'name',
        'highlight_text',
        'is_available',
        'description',
        'quote',
        'others',
    ];

    public function setNameAttributes($value)
    {
        $this->attributes['name'] = $value;
        $this->attributes['slug'] = Str::slug($value);
    }

    public function experiencePhotos() 
    {
        return $this->hasMany(ExperiencePhoto::class);
    }
}
