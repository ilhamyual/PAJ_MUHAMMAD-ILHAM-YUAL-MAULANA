<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Anggota extends Model
{
    public function hadiah()
    {
        return $this->belongsToMany(Hadiah::class);
    }
}
