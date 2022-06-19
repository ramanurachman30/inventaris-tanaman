<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateGreenroofVariatifTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('greenroof_variatif', function (Blueprint $table) {
            $table->id();
            $table->string('jenis_tanaman');
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
        Schema::dropIfExists('greenroof_variatif');
    }
}
