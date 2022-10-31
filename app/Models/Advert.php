<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Advert extends Model
{
    protected $table = 'adverts';
    protected $fillable = ['block'];
    protected $casts = [
        'block'=>'array',
    ];
}
