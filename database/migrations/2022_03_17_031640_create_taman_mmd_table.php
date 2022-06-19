<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTamanMmdTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('taman_mmd', function (Blueprint $table) {
            $table->id();
            $table->string('nama_buah');
            $table->bigInteger('jumlah');
            $table->string('nama_latin');
            $table->string('manfaat');
            $table->string('gambar');
            $table->string('perbanyakan');
            $table->string('perawatan');
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
        Schema::dropIfExists('taman_mmd');
    }
}
