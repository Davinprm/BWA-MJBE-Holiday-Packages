<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class YachtPhoto extends Model
{
    use HasFactory, SoftDeletes;

    protected $guarded = [];

    public function yacht()
    {
        return $this->belongsTo(Yacht::class);
    }
}
