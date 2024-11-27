<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Plat extends Model
{
    // Table associée
    protected $table = 'plats';

    // Colonnes qui peuvent être remplies
    protected $fillable = ['nom', 'description', 'image_id'];

    // Définir la relation avec le modèle Image
    public function image()
    {
        return $this->belongsTo(Image::class, 'image_id');
    }

    public $timestamps = false;
}