<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class YachtBooking extends Model
{
    use HasFactory;

    protected $fillable = [
        'user_id',
        'name',
        'email',
        'phone_number',
        'passenger',
        'children',
        'yacht_id',
        'date',
        'trip_length',
        'destination_id',
        'experiences_id',
        'price',
        'preferences',
        'id_card',
        'paid',
        'booking_trx_id',
    ];

    public static function generateUniqueTrxId() {
        $prefix = 'IYB';
        do {
            $randomString = $prefix . mt_rand(1000, 9999);
        } while (self::where('booking_trx_id', $randomString)->exists());
    
        return $randomString;
    }

    public function yacht()
    {
        return $this->belongsTo(Yacht::class);
    }

    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function destinations()
    {
        return $this->hasMany(Destination::class);
    }

    public function experiences()
    {
        return $this->hasMany(Experience::class);
    }
}
