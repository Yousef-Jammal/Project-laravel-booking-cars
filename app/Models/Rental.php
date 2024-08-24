<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Carbon\Carbon;

class Rental extends Model
{
    use HasFactory;

    protected $fillable = [
        'user_id',
        'car_id',
        'rent_start', // edit the name
        'rent_end',   // edit the name
        'status_id'
    ];
    public $timestamps = false;

    protected $casts = [
        'rent_start' => 'date', // or 'datetime' if it's a full datetime
        'rent_end' => 'date',   // or 'datetime' if it's a full datetime
    ];

    public function status()
    {
        return $this->belongsTo(Status::class);
    }

    public function car()
    {
        return $this->belongsTo(Car::class);
    }

    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function calculateTotalPrice()
    {
        // Calculate the number of days between rent_start and rent_end
        $rentStart = \Carbon\Carbon::parse($this->rent_start);
        $rentEnd = \Carbon\Carbon::parse($this->rent_end);

        $rentDuration = $rentStart->diffInDays($rentEnd);

        // Calculate total price
        return $rentDuration * $this->car->price_per_day;
    }
}
