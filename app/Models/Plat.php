<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Plat extends Model
{
    use HasFactory;

    protected $table = 'plats';
    protected $fillable = ['nom', 'description', 'image_id'];
    public $timestamps = false;


    public function image()
    {
        return $this->belongsTo(Image::class, 'image_id');
    }

    public function ingredients()
    {
        return $this->belongsToMany(
            Ingredient::class,
            'plat_Ingredient',
            'plat_id',
            'ingredient_id'
        );
    }
}
