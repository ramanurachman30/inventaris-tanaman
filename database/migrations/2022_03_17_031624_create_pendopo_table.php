<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePendopoTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('pendopo', function (Blueprint $table) {
            $table->id();
            $table->string('nama_tanaman');
            $table->bigInteger('jumlah');
            $table->string('nama_latin');
            $table->string('gambar');
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
        Schema::dropIfExists('pendopo');
    }
}
