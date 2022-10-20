<?php

namespace App\Models;

use Cviebrock\EloquentSluggable\Sluggable;
use Illuminate\Database\Eloquent\Model;

class Engine extends Model
{
    use Sluggable;

    protected $table = 'engines';
   // protected $fillable = ['automobile_id,id,specs,name,created_at,updated_at'];
    protected $guarded = [];

    public function sluggable(): array
    {
        return [
            'slug' => [
                'source' => 'name'
            ]
        ];
    }
    public function automobiles()
    {
        return $this->hasMany(Automobiles::class,'models_id','automobile_id');
    }
}
