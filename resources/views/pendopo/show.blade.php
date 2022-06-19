@extends('layouts.master')
@section('title','Detail Data Pendopo')
    
@section('content')

<div class="col-12" style="margin-left:50px">
  <h3 class="text-light">Detail Data Pendopo</h3>
  <div class="card" style="width: 60rem;">
  <div class="row align-items-center">
    <div class="col-6 ">
    <p class="col-16" style="margin-left:50px"><img src="/post-images/{{$pendopo->gambar}}"  width="300px"></p>
    </div>
    <div class="col-6">
      <div class="card-body">
        <table>
          
        <h5 class="card-title">Nama Tanaman : {{$pendopo->nama_tanaman}}</h5>
        <h5 class="card-subtitle mb-2">Jumlah : {{$pendopo->jumlah}}</h5>
        <h5 class="card-text mb-2">Nama Latin : {{$pendopo->nama_latin}}</h5>
        <h5 class="card-text mb-2">Perawatan : {{$pendopo->perawatan}}</h5>
        
        </table>
        
        
        <a href="{{$pendopo->id}}/edit" class="btn btn-primary">Edit</a>
        <a href="/pendopo" class="card-link btn btn-secondary">Kembali</a>
      </div>
      </div>
      </div>
    </div>
</div>
</div>


@endsection