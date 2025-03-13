<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Produit extends Model
{
    use HasFactory;
    protected $guarded=['id'];
    public function sousFamille(){
        return $this->belongsTo(SousFamille::class);
    }
    public function marque(){
        return $this->belongsTo(Marque::class);
    }
    public function unite(){
        return $this->belongsTo(Unite::class);
    }
}
