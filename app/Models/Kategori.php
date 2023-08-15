<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Kategori extends Model
{
    use HasFactory;

    protected $guarded = [
        'id'
    ];

    protected $table = 'kategori';

    public function porto(): HasMany
    {
        return $this->hasMany(Porto::class, 'porto_id');
    }

    public function berita(): HasMany
    {
        return $this->hasMany(Berita::class, 'berita_id');
    }
}
