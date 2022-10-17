<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Engine extends Model
{
    protected $table = 'engines';
    protected $fillable = ['automobile_id,id,specs,name,created_at,updated_at'];
}
