@extends('layouts.master')
@section('title','Detail Data Greenroof Variatif')
    
@section('content')

<div class="col-12" style="margin-left:50px">
  <h3 class="text-light">Detail Data Greenroof Variatif</h3>
  <div class="card" style="width: 60rem;">
  <div class="row align-items-center">
    <div class="col-6 ">
    <p class="col-16" style="margin-left:50px"><img src="/post-images/{{$variatif->gambar}}"  width="300px"></p>
    </div>
    <div class="col-6">
      <div class="card-body">
        <table>
          
        <h5 class="card-title">Jenis Tanaman : {{$variatif->jenis_tanaman}}</h5>
        <h5 class="card-title">Jumlah : {{$variatif->jumlah}}</h5>
        <h5 class="card-text mb-2">Nama Latin : {{$variatif->nama_latin}}</h5>
        <h5 class="card-subtitle mb-2">Manfaat : {{$variatif->manfaat}}</h5>
        <h5 class="card-text mb-2">Perbanyakan : {{$variatif->perbanyakan}}</h5>
        <h5 class="card-text mb-2">Perawatan : {{$variatif->perawatan}}</h5>
        
        </table>
        
        
        <a href="{{$variatif->id}}/edit" class="btn btn-primary">Edit</a>
        <a href="/variatif" class="card-link btn btn-secondary">Kembali</a>
      </div>
      </div>
      </div>
    </div>
</div>
</div>


@endsection