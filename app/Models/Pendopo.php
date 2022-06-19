<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Pendopo extends Model
{
    use HasFactory;
    protected $table = "pendopo";
    protected $primarykey = "id";
    protected $fillable = ['nama_tanaman','jumlah','nama_latin','gambar','perawatan'];
}
