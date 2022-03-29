<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Hotelayo extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'location',
        'price',
        'image',
        'facility',
        'desc'
    ];
}
