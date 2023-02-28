<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class DataBarang extends Model
{
    protected $table = "data_barang";
    protected $fillable = ["nama_barang","foto","jenis_id","stok"];

    public function barang()
    {
        return $this->belongsTo(Barang::class, 'jenis_id');
    }

    public function transaksi()
    {
    return $this->hasMany(Transaksi::class, 'barang_id');
    }
}
