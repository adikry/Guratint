<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Porto extends Model
{
    use HasFactory;

    protected $guarded = [
        'id'
    ];

    protected $table = "porto";

    protected $casts = [
        'content' => 'array',
        'isActive' => 'boolean',
        'forHomepage' => 'boolean'
    ];

    protected $with = ['user', 'kategori'];

    public function user(): BelongsTo
    {
        return $this->belongsTo(User::class, 'user_id');
    }

    public function kategori(): BelongsTo
    {
        return $this->belongsTo(Kategori::class, 'kategori_id');
    }
}
