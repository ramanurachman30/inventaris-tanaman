@extends('layouts.master')
@section('title','Edit Data Tanaman MMD')
  
@section('content')
    @if ($errors->any())
        <div class="alert alert-danger">
            <strong>Whoops!</strong> There were some problems with your input.<br><br>
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif
    <div class="d-flex justify-content-center">
        <div class="card">
            <div class="card-header d-flex justify-content-between align-items-center">Isi Data  <i class="ti ti-bookmark-alt"></i><a class="btn btn-secondary" href="{{ route('taman.index') }}"><i class="ti ti-arrow-left"></i> Back</a></div>
            <div class="card-body card-block">
                <form action="{{ route('taman.update',$taman->id) }}" method="POST" enctype="multipart/form-data">
                    @csrf
                    @method('PUT')
                    <div class="row d-flex">
                        <div class="col-6">
                            <div class="form-group">
                                <div class="input-group">
                                <div class="input-group">Nama Buah</div>
                                <input type="text" name="nama_buah" class="form-control" placeholder="Nama Buah" value="{{ $taman->nama_buah }}" required>
                                </div>
                            </div>
                            <div class="form-group">
                                <div class="input-group">
                                <div class="input-group">Jumlah</div>
                                <input type="number" name="jumlah" class="form-control" placeholder="Jumlah" value="{{ $taman->jumlah }}" required>
                                </div>
                            </div>
                            <div class="form-group">
                                <div class="input-group">
                                <div class="input-group">Nama Latin</div>
                                <input type="text" name="nama_latin" class="form-control" placeholder="Nama Latin" value="{{ $taman->nama_latin }}" required>
                                </div>
                            </div>
                            <div class="row form-group">
                                <div class="input-group">
                                <div class="input-group">Manfaat</div>
                                <textarea type="text" name="manfaat" class="form-control" placeholder="Manfaat" required>{{ $taman->manfaat }}</textarea>
                                </div>
                            </div>
                        </div>
                        <div class="col-6">
                            <div class="form-group">
                                <div class="input-group">
                                <div class="input-group">Gambar</div>
                                <input type="file" name="gambar" class="form-control" placeholder="Gambar" value="{{ $taman->gambar }}" required>
                                </div>
                            </div>
                            <div class="form-group">
                            <div class="input-group">
                                <div class="input-group">Perbanyakan</div>
                                <select class="form-control" name="perbanyakan" id="" value="{{ $taman->perbanyakan }}">
                                    <option disabled selected>--Pilih Perbanyakan--</option> 
                                    <option value="Generatif">Perbanyakan Generatif</option>
                                    <option value="Vegetatif">Perbanyakan Vegetatif</option>
                                </select>
                            </div>
                            <div class="form-group mt-3">
                                <div class="input-group">
                                    <div class="input-group">Perawatan</div>
                                    <select class="form-control" name="perawatan" id="" value="{{ $taman->perawatan }}">
                                        <option disabled selected>--Pilih Perawatan--</option> 
                                        <option value="Dirawat">Dirawat</option>
                                        <option value="Tidak Dirawat">Tidak Dirawat</option>
                                    </select>
                                </div>
                            </div>
                            <div class="col-xs-12 col-sm-12 col-md-12 text-center">
                                <button type="submit" class="btn btn-warning"><i class="ti ti-plus"></i> Update</button>
                            </div>
                        </div>
                        </form>
                    </div>
                </div>
                </div>
            
            </div>
            </div>
        </div>
    </div>
@endsection