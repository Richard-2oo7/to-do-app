<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\Relations\HasManyThrough;

class Board extends Model
{
    use HasFactory;

    public function panels(): HasMany{
        return $this->hasMany(Panel::class);
    }
    // public function tasks(): HasManyThrough{
    //     return $this->hasManyThrough(Task::class, Panel::class);
    // }
}