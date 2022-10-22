<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Automobiles extends Model
{
    protected $table = 'automobiles';
   // protected $fillable = ['id','url','models_id','name','description','press_release','photos','updated_at'];

    public function engine()
    {
        return $this->hasMany(Engine::class,'automobile_id','models_id');
    }
}
