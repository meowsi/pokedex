<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Pokedex extends Model
{
    protected $table = "pokedex";
    use HasFactory;
    protected $fillable = ['number', 'name', 'type', 'description', 'weight', 'height'];
}
