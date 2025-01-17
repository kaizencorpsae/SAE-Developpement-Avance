<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Plat_Ingredient extends Model
{
    use HasFactory;

    protected $table = 'plat_ingredient';
    protected $fillable = ['ingredient_id', 'plat_id'];
    public $timestamps = false;

}
