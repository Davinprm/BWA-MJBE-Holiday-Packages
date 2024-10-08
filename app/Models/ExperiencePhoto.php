<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class ExperiencePhoto extends Model
{
    use HasFactory, SoftDeletes;

    protected $guarded = [];

    public function experience()
    {
        return $this->belongsTo(Experience::class);
    }
}
