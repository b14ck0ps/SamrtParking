<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Bookings extends Model
{
    use HasFactory;
    protected $fillable = [
        'parking_slot',
        'vehicle_number',
        'duration',
        'user_id',
    ];
}
