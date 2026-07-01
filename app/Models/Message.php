<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Message extends Model
{
    use HasFactory;

    protected $fillable = [
        'nom',
        'email',
        'sujet',
        'message',
        'lu'
    ];

    protected $casts = [
        'lu' => 'boolean'
    ];

    public function scopeNonLu($query)
    {
        return $query->where('lu', false);
    }
}