<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Produktif extends Model
{
    use HasFactory;
    protected $table = "greenroof_produktif";
    protected $primarykey = "id";
    protected $fillable = ['nama_sayuran','nama_latin','manfaat','gambar','perbanyakan','perawatan','hasil_penjualan','jenis_budidaya'];
}
