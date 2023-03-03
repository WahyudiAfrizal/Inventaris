<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Transaksi extends Model
{
    protected $table = "transaksi";
    protected $fillable = ["tanggal", "barang_id", "jenis", "jumlah","keterangan","user_id"];
    
    public function databarang()
    {
        return $this->belongsTo(DataBarang::class, 'barang_id');
    }
}
