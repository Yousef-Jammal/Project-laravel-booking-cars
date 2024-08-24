<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Car extends Model
{
    use HasFactory;
    protected $fillable = [
        'availability',
        'brand',
        'model',
        'body',
        'ac',
        'door',
        'mileage',
        'fuel_type',
        'make',
        'transmission',
        'drivetrian',
        'vin',
        'brake',
        'year',
        'engine_hp',
        'rating',
        'price_per_day',
        'user_id',
        'num_of_ratings'
    ];
    public $timestamps = false;

    public function rentals()
    {
        return $this->belongsToMany(Rental::class, 'rentals')->withPivot('rent_start', 'rent_end', 'status_id');
    }
    // car can have multiple rentals but each rental is associated with one specific car, the correct relationship should be a hasMany
    // public function rentals()
    // {
    //     return $this->hasMany(Rental::class);
    // }


    // Relationship for actor ratings
    public function reviews()
    {
        return $this->belongsToMany(User::class, 'reviews')->withPivot('rating', 'date', 'content');
    }

    public function images()
    {
        return $this->hasMany(Image::class);
    }

    public function features()
    {
        return $this->hasMany(Feature::class);
    }

    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function brand()
    {
        return $this->belongsTo(Brand::class);
    }
}
