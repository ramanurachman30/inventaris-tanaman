<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateGreenroofProduktifTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('greenroof_produktif', function (Blueprint $table) {
            $table->id();
            $table->string('nama_sayuran');
            $table->string('nama_latin');
            $table->string('manfaat');
            $table->string('gambar');
            $table->string('perbanyakan');
            $table->string('perawatan');
            $table->string('hasil_penjualan');
            $table->string('jenis_budidaya');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('greenroof_produktif');
    }
}
