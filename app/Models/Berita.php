<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Support\Str;

class Berita extends Model
{
    use HasFactory;

    protected $guarded = [
        'id'
    ];

    protected $table = 'berita';

    protected $casts = [
        'isActive' => 'boolean',
        'published_at' => 'datetime'
    ];

    protected $with = ['user', 'kategori'];


    public function scopeFilter($query, array $filters)
    {
        $query->when($filters['q'] ?? false, function ($query, $q) {
            return $query->where(function ($query) use ($q) {
                $query->where('judul', 'like', '%' . $q . '%')
                    ->orWhere('body', 'like', '%' . $q . '%');
            });
        });

        $query->when($filters['k'] ?? false, function ($query, $k) {
            return $query->whereHas('kategori', function ($query) use ($k) {
                $query->where('slug', $k);
            });
        });
    }

    public function user(): BelongsTo
    {
        return $this->belongsTo(User::class, 'user_id');
    }

    public function kategori(): BelongsTo
    {
        return $this->belongsTo(Kategori::class, 'kategori_id');
    }

    public function getFormattedDate()
    {
        return $this->published_at->isoFormat('D MMM Y');
    }

    public function shortBody(): string
    {
        return Str::words(strip_tags($this->body), 30, '...');
    }

    public function getRouteKeyName(): string
    {
        return 'slug';
    }
}
