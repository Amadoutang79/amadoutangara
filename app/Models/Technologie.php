<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Technologie extends Model
{
    use HasFactory;

    protected $fillable = [
        'nom',
        'icone',
        'couleur',
        'niveau'
    ];

    public function projets()
    {
        return $this->belongsToMany(Projet::class);
    }
}