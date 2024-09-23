<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class User extends Model
{
    use HasFactory;

    public $timestamps = false;
    protected $table = 'users';
    protected $primaryKey = 'USER_ID';


    protected $fillable = [
        'FNAME',
        'LNAME',
        'LIC_NUM',
        'EMAIL',
        'PHONE_NUMBER',
        'PASSWORD',
        'GENDER'
    ];
    
}
