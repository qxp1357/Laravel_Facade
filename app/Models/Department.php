<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Department extends Model
{
    use HasFactory;

    public function division()
    {
        return $this->belongsTo(Division::class);
    }

    public function teams()
    {
        return $this->hasMany(Team::class);
    }
}
