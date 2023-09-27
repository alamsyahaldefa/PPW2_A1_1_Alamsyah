<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Barang extends Model
{
    use HasFactory;

    protected $table = 'gudang_barang'; // Nama tabel dalam database

    protected $fillable = [
        'nama_barang',
        'harga',
        'stok',
        'id_supplier',
    ];

    protected $primaryKey = 'id'; // Nama kolom primary key
}
