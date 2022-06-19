@extends('layouts.master')
@section('title','Tambah Data Greenroof Produktif')
  
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
            <div class="card-header d-flex justify-content-between align-items-center">Isi Data  <i class="ti ti-bookmark-alt"></i><a class="btn btn-secondary" href="{{ route('produktif.index') }}"><i class="ti ti-arrow-left"></i> Back</a></div>
            <div class="card-body card-block">
                <form action="{{ route('produktif.store') }}" method="POST" enctype="multipart/form-data">
                    @csrf
                    <div class="row d-flex">
                        <div class="col-6">
                            <div class="form-group">
                                <div class="input-group">
                                <div class="input-group">Nama Sayuran</div>
                                <input type="text" name="nama_sayuran" class="form-control" placeholder="Nama Sayuran" required>
                                </div>
                            </div>
                            <div class="form-group">
                                <div class="input-group">
                                <div class="input-group">Nama Latin</div>
                                <input type="text" name="nama_latin" class="form-control" placeholder="Nama Latin" required>
                                </div>
                            </div>
                            <div class="form-group">
                                <div class="input-group">
                                <div class="input-group">Manfaat</div>
                                <textarea type="text" name="manfaat" class="form-control" placeholder="Manfaat" required></textarea>
                                </div>
                            </div>
                            <div class="row form-group">
                                <div class="input-group">
                                <div class="input-group">Gambar</div>
                                <input type="file" name="gambar" class="form-control" placeholder="Gambar" required>
                                </div>
                            </div>
                        </div>
                        <div class="col-6">
                            <div class="form-group">
                                <div class="input-group">
                                    <div class="input-group">Perbanyakan</div>
                                    <select class="form-control" name="perbanyakan" id="">
                                        <option disabled selected>--Pilih Perbanyakan--</option> 
                                        <option value="Generatif">Perbanyakan Generatif</option>
                                        <option value="Vegetatif">Perbanyakan Vegetatif</option>
                                    </select>
                                </div>
                            </div>
                            <div class="form-group">
                            <div class="input-group">
                            <div class="input-group">Perawatan</div>
                            <select class="form-control" name="perawatan" id="">
                                <option disabled selected>--Pilih Perawatan--</option> 
                                <option value="Dirawat">Dirawat</option>
                                <option value="Tidak Dirawat">Tidak Dirawat</option>
                            </select>
                            </div>
                            <div class="form-group mt-3">
                                <div class="input-group">
                                    <div class="input-group">Hasil Penjualan</div>
                                    <input type="text" name="hasil_penjualan" class="form-control" placeholder="Hasil Penjualan" required>
                                </div>
                            </div>
                            <div class="form-group">
                                <div class="input-group">
                                    <div class="input-group">Jenis Budidaya</div>
                                    <input type="text" name="jenis_budidaya" class="form-control" placeholder="Jenis Budidaya" required>
                                </div>
                            </div>
                            </div>
                            <div class="col-xs-12 col-sm-12 col-md-12 text-center">
                                <button type="submit" class="btn btn-primary"><i class="ti ti-plus"></i> Submit</button>
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