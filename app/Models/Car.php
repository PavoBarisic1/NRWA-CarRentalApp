<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Car extends Model
{
    use HasFactory;
    public $timestamps = false;
    protected $table = 'cars';
    protected $primaryKey = 'CAR_ID';
    protected $fillable = [
        
        'CAR_NAME',
        'FUEL_TYPE',
        'CAPACITY',
        'PRICE',
        'CAR_IMG',
        'AVAILABLE' 
    ];

}
