<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Booking extends Model
{
    use HasFactory;
    public $timestamps = false;
    protected $table = 'booking';
    protected $primaryKey = 'BOOK_ID';
    protected $fillable = [
        
        'CAR_ID',
        'USER_ID',
        'BOOK_PLACE',
        'BOOK_DATE',
        'DURATION',
        'PHONE_NUMBER',
        'DESTINATION',
        'RETURN_DATE',
        'PRICE',
        'BOOK_STATUS',
        
    ];

    public function car()
    {
        return $this->belongsTo(Car::class, 'CAR_ID', 'CAR_ID');
    } 

    public function user()
    {
        return $this->belongsTo(User::class, 'USER_ID', 'USER_ID');
    } 

}



