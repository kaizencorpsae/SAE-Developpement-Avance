<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Image extends Model
{
    // Si le nom de la table n'est pas le pluriel du nom du modèle
    protected $table = 'images';

    // Si vous n'utilisez pas des colonnes par défaut, spécifiez celles qui sont remplissables
    protected $fillable = ['url'];

    // Si vous avez des timestamps (created_at, updated_at) dans votre table
    public $timestamps = false; // Si votre table ne les utilise pas
}
