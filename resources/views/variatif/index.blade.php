@extends('layouts.master')
@section('title','Greenroof Variatif')
@section('content')

<div class="container d-flex justify-content-center content mt-3">
    <div class="animated fadeIn">
        <div class="row">
            <div class="col-md-12">
                <a href="/variatif/create" class="btn btn-success my-3 rounded"><i class="fa fa-pencil"></i> Tambah Data</a>
            </div>
            <div class="card">
                <center>
                    <div class="card-header">
                        <strong class="card-title">Greenroof Variatif</strong>
                    </div>
                </center>
                <div class="card-body">
                    <table id="example" class="table table-striped table-bordered rounded">
                        <thead class="thead-dark">
                        <tr>
                            <th>No</th>
                            <th>Jenis Tanaman</th>
                            <th>Jumlah</th>
                            <th>Nama Latin</th>
                            <th>Manfaat</th>
                            <th>Gambar</th>
                            <th>Perbanyakan</th>
                            <th>Perawatan</th>
                            <th>Action</th>
                        </tr>
                        </thead>
                        <tbody>
                        
                        @foreach ($variatif as $variatif)
                        <tr>
                            <th scope="row">{{$loop->iteration}}</th>
                            <td>{{$variatif->jenis_tanaman}}</td>
                            <td>{{$variatif->jumlah}}</td>
                            <td>{{$variatif->nama_latin}}</td>
                            <td>{{$variatif->manfaat}}</td>
                            <td><img src="post-images/{{$variatif->gambar}}" alt="" width="100px"></td>
                            <td>{{$variatif->perbanyakan}}</td>
                            <td>{{$variatif->perawatan}}</td>
                            <td>
                                <a href="/variatif/{{$variatif->id}}/edit" class="btn btn-warning rounded"> Edit</a>
                                <div type="submit" class="btn btn-danger rounded" onclick="fcthapus('{{$variatif->id}}')"><i class="ti ti-trash"></i> Delete</div>
                                <a href="/variatif/{{$variatif->id}}" class="btn btn-info rounded"> Detail</a> 
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
                document.location.href = "{{url('variatif/hapus/')}}" + "/" + id;
            }
        })
    }
</script>

</html>
@endsection