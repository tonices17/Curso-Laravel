<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Note extends Model
{
    use HasFactory;

    protected $fillable = [
        'title',
        'description',
        'author',
        'deadline',
        'done',
    ];

    protected $cast = [
        'deadline' => 'date',
    ];

    protected $hidden = [];

    public function author(): BelongsTo
    {
        return $this->belongsTo(Author::class);
    }
}
