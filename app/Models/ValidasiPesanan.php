<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ValidasiPesanan extends Model
{
    use HasFactory;

    public function pesanan()
    {
        return $this->belongsTo(Pesanan::class);
    }
}
