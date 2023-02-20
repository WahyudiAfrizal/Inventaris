<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class DataBarang extends Model
{
    protected $table = "data_barang";
    protected $fillable = ["nama_barang","jenis_barang","stok"];
}
