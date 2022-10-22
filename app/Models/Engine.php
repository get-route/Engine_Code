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
    protected $casts = ['specs'=>'object'];
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
        return $this->belongsTo(Automobiles::class,'automobile_id','models_id');
    }

}
