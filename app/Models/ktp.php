<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ktp extends Model
{
    use HasFactory;

    public function Warga() {
        return $this->belongsTo(warga::class);
    }
}
