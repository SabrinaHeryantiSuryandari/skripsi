<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Pesanan extends Model
{
    use HasFactory;

    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function menu()
    {
        return $this->belongsTo(Menu::class);
    }

    public function validasipesanan()
    {
        return $this->hasMany(ValidasiPesanan::class);
    }

    // public function total()
    // {
    //     return $_POST[Menu.] * $_POST[angka2]
    //     $menu->harga * $pesanan->jumlah_pesanan
    //     ;
    // }
}
