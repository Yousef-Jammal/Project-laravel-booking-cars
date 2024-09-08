<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class RentalRequest extends Model
{
    use HasFactory;
    protected $table = 'renter_request';

    protected $fillable = [
        'user_id',
        'user_description',
        'user_id_image',
        'request_status',
    ];
    public function user()
    {
        return $this->belongsTo(User::class, 'user_id');
    }
}
