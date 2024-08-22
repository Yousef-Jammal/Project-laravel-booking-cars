<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Rental extends Model
{
    use HasFactory;
    protected $fillable = [
        'user_id',
        'car_id',
        'from_date',
        'until_date',
        'status_id'
    ];
    public $timestamps = false;

    public function status()
    {
        return $this->belongsTo(Status::class);
    }
}
