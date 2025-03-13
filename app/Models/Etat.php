<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Etat extends Model
{
    use HasFactory;
    protected $fillable = ['etat','updated_at','created_at']; // Champs remplissables 
}
