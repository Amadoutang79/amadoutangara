<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Str;

class Projet extends Model
{
    use HasFactory;

    protected $fillable = [
        'titre',
        'slug',
        'description_courte',
        'description_complete',
        'categorie',
        'image',
        'image_secondaire',
        'lien_demo',
        'lien_code',
        'est_en_avant',
        'ordre'
    ];

    protected $casts = [
        'est_en_avant' => 'boolean'
    ];

    public function technologies()
    {
        return $this->belongsToMany(Technologie::class);
    }

    public function setSlugAttribute($value)
    {
        $this->attributes['slug'] = Str::slug($value);
    }

    public function getImageUrlAttribute()
    {
        return $this->image ? asset('storage/projets/' . $this->image) : null;
    }

    public function getDescriptionCourteAttribute($value)
    {
        return Str::words($value, 20);
    }

    public function scopeFeatured($query)
    {
        return $query->where('est_en_avant', true);
    }

    public function scopeOrdered($query)
    {
        return $query->orderBy('ordre', 'asc');
    }
}