<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Panel extends Model
{
    use HasFactory;

    
    public function tasks(): HasMany
    {
        return $this->hasmany(Task::class);
    }
    
    public function board(): BelongsTo
    {
        return $this->belongsTo(Board::class);
    }
}