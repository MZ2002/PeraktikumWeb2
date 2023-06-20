<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Produk extends Model
{
    use HasFactory;

    //hubungkan ke produk

    protected $table = 'produk';

    // tentuin kolom kolom mana yang bisa di isi 

    protected $fillable = [
        'kode',             // Kode produk
        'nama',             // Nama produk
        'harga_jual',       // Harga jual produk
        'harga_beli',       // Harga beli produk
        'stok',             // Jumlah stok produk
        'min_stok',         // Jumlah minimal stok produk
        'deskripsi',        // Deskripsi produk
        'kategori_produk_id',// ID kategori produk
    ];

    //buat fungsi kasih relasi kategori produk

    public function kategori_produk()
    {
        return $this->belongsTo(KategoriProduk::class);
    } 


}
