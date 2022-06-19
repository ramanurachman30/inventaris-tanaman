@extends('layouts.master')
@section('title','Detail Data Greenroof Produktif')
    
@section('content')

<div class="col-12" style="margin-left:50px">
  <h3 class="text-light">Detail Data Greenroof Produktif</h3>
  <div class="card" style="width: 60rem;">
  <div class="row align-items-center">
    <div class="col-6 ">
    <p class="col-16" style="margin-left:50px"><img src="/post-images/{{$produktif->gambar}}"  width="300px"></p>
    </div>
    <div class="col-6">
      <div class="card-body">
        <table>
          
        <h5 class="card-title">Nama Sayuran : {{$produktif->nama_sayuran}}</h5>
        <h5 class="card-text mb-2">Nama Latin : {{$produktif->nama_latin}}</h5>
        <h5 class="card-subtitle mb-2">Manfaat : {{$produktif->manfaat}}</h5>
        <h5 class="card-text mb-2">Perbanyakan : {{$produktif->perbanyakan}}</h5>
        <h5 class="card-text mb-2">Perawatan : {{$produktif->perawatan}}</h5>
        <h5 class="card-text mb-2">Hasil Penjualan : {{$produktif->hasil_penjualan}}</h5>
        <h5 class="card-text mb-2">Jenisa Budidaya : {{$produktif->jenis_budidaya}}</h5>
        
        </table>
        
        
        <a href="{{$produktif->id}}/edit" class="btn btn-primary">Edit</a>
        <a href="/produktif" class="card-link btn btn-secondary">Kembali</a>
      </div>
      </div>
      </div>
    </div>
</div>
</div>


@endsection