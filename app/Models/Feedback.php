<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Feedback extends Model
{
    use HasFactory;
    public $timestamps = false;
    protected $table = 'feedback';
    protected $primaryKey = 'FED_ID';
    protected $fillable = [
        
        'FED_ID',
        'USER_ID',
        'COMMENT',
        
    ];


    public function user()
    {
        return $this->belongsTo(User::class, 'USER_ID', 'USER_ID');
    } 

}
