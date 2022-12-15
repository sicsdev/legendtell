<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CarUser extends Model
{
    use HasFactory;
    public $timestamps = false;
    protected $fillable = [
        'car_id',
        'user_id',
    ];
}
