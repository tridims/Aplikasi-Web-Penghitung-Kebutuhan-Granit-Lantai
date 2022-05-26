<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class GraniteTile extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'length',
        'width',
        'amount',
        'price',
        'website',
        'image',
    ];
}
