@extends('layouts.master')
@section('title','Detail Data Tanaman MMD')
    
@section('content')

<div class="col-12" style="margin-left:50px">
  <h3 class="text-light">Detail Data Tanaman MMD</h3>
  <div class="card" style="width: 60rem;">
  <div class="row align-items-center">
    <div class="col-6 ">
    <p class="col-16" style="margin-left:50px"><img src="/post-images/{{$taman->gambar}}"  width="300px"></p>
    </div>
    <div class="col-6">
      <div class="card-body">
        <table>
          
        <h5 class="card-title">Nama Buah : {{$taman->nama_buah}}</h5>
        <h5 class="card-title">Jumlah : {{$taman->jumlah}}</h5>
        <h5 class="card-text mb-2">Nama Latin : {{$taman->nama_latin}}</h5>
        <h5 class="card-subtitle mb-2">Manfaat : {{$taman->manfaat}}</h5>
        <h5 class="card-text mb-2">Perbanyakan : {{$taman->perbanyakan}}</h5>
        <h5 class="card-text mb-2">Perawatan : {{$taman->perawatan}}</h5>
        
        </table>
        
        
        <a href="{{$taman->id}}/edit" class="btn btn-primary">Edit</a>
        <a href="/taman" class="card-link btn btn-secondary">Kembali</a>
      </div>
      </div>
      </div>
    </div>
</div>
</div>


@endsection