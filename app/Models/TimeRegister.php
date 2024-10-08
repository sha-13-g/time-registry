<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class TimeRegister extends Model {

    protected $guarded = [];

    use HasFactory;

    public function agent() {
        return $this->belongsTo(Agent::class);
    }
}
