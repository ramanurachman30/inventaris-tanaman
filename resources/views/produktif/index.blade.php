@extends('layouts.master')
@section('title','Greenroof Produktif')
@section('content')

<div class="container d-flex justify-content-center content mt-3">
    <div class="animated fadeIn">
        <div class="row">
            <div class="col-md-12">
                <a href="/produktif/create" class="btn btn-success my-3 rounded"><i class="fa fa-pencil"></i> Tambah Data</a>
            </div>
            <div class="card">
                <center>
                    <div class="card-header">
                        <strong class="card-title">Greenroof Produktif</strong>
                    </div>
                </center>
                <div class="card-body">
                    <table id="example" class="table table-striped table-bordered rounded">
                        <thead class="thead-dark">
                        <tr>
                            <th>No</th>
                            <th>Nama Sayuran</th>
                            <th>Nama Latin</th>
                            <th>Manfaat</th>
                            <th>Gambar</th>
                            <th>Perbanyakan</th>
                            <th>Perawatan</th>
                            <th>Hasil Penjualan</th>
                            <th>Jenis Budidaya</th>
                            <th>Action</th>
                        </tr>
                        </thead>
                        <tbody>
                        
                        @foreach ($produktif as $produktif)
                        <tr>
                            <th scope="row">{{$loop->iteration}}</th>
                            <td>{{$produktif->nama_sayuran}}</td>
                            <td>{{$produktif->nama_latin}}</td>
                            <td>{{$produktif->manfaat}}</td>
                            <td><img src="post-images/{{$produktif->gambar}}" alt="" width="100px"></td>
                            <td>{{$produktif->perbanyakan}}</td>
                            <td>{{$produktif->perawatan}}</td>
                            <td>{{$produktif->hasil_penjualan}}</td>
                            <td>{{$produktif->jenis_budidaya}}</td>
                            <td>
                                <a href="/produktif/{{$produktif->id}}/edit" class="btn btn-warning rounded"> Edit</a>
                                <div type="submit" class="btn btn-danger rounded" onclick="fcthapus('{{$produktif->id}}')"><i class="ti ti-trash"></i> Delete</div>
                                <a href="/produktif/{{$produktif->id}}" class="btn btn-info rounded"> Detail</a> 
                            </td>
                        </tr>
                        @endforeach
                        
                        </tbody>
                    </table>
                </div>
            </div>
                
            </div><!-- .animated -->
        </div><!-- .content -->


    </div><!-- /#right-panel -->

    <!-- Right Panel -->


</body>
<script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>
<script>
    function fcthapus(id) {
        Swal.fire({
            title: 'Anda yakin menghapus ?',
            text: "Data yang telah anda hapus tidak bisa dikembalikan!",
            icon: 'Hati-Hati!',
            showCancelButton: true,
            confirmButtonColor: '#3085d6',
            cancelButtonColor: '#d33',
            confirmButtonText: 'Ya, hapus data!'
        }).then((result) => {
            if (result.isConfirmed) {
                document.location.href = "{{url('produktif/hapus/')}}" + "/" + id;
            }
        })
    }
</script>

</html>

@endsection