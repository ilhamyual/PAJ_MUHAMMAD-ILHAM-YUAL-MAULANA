<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Hadiah extends Model
{
    public function anggota()
    {
        return $this->belongsToMany(Anggota::class);
    }
}
