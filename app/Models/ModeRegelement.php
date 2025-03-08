<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ModeRegelement extends Model
{
    use HasFactory;
    protected $table = 'mode_reglements';
    protected $fillable = [
        'a_id',
        'mode_reglements',
    ];
}
