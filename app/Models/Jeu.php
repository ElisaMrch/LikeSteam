<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Cviebrock\EloquentSluggable\Sluggable;

class Jeu extends Model
{
    use HasFactory;
    use Sluggable;

    protected $fillable = ['nom', 'slug', 'créateur', 'description', 'type','prix', 'url', 'photo_principale', 'user_id'];

    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function sluggable(): array
    {
        return[
            'slug' => [
                    'source' => 'nom'
            ]
        ];
    }
}
