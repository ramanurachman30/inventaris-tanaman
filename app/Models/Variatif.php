<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Variatif extends Model
{
    use HasFactory;
    protected $table = "greenroof_variatif";
    protected $primarykey = "id";
    protected $fillable = ['jenis_tanaman','jumlah','nama_latin','manfaat','gambar','perbanyakan','perawatan'];
}
