<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Taman extends Model
{
    use HasFactory;
    protected $table = "taman_mmd";
    protected $primarykey = "id";
    protected $fillable = ['nama_buah','jumlah','nama_latin','manfaat','gambar','perbanyakan','perawatan'];
}
