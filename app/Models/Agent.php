<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Agent extends Model {

    protected $guarded = [];

    use HasFactory;

    public function  timeRegister (): HasMany {
        return $this->hasMany(TimeRegister::class);
    }
}
