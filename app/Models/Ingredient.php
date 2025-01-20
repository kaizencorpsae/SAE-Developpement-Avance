<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Ingredient extends Model
{
    protected $table = 'ingredients';

    protected $fillable = ['nom', 'image_id'];

    public $timestamps = false;

    public function image()
    {
        return $this->belongsTo(Image::class, 'image_id');
    }

    public function plats()
    {
        return $this->belongsToMany(
            Plat::class,
            'plat_ingredient',
            'ingredient_id',
            'plat_id'
        );
    }
}


