@extends('layouts.master')
@section('title','Pendopo')
@section('content')

<div class="container d-flex justify-content-center content mt-3">
    <div class="animated fadeIn">
        <div class="row">
            <div class="col-md-12">
                <a href="/pendopo/create" class="btn btn-success my-3 rounded"><i class="fa fa-pencil"></i> Tambah Data</a>
            </div>
            <div class="card">
                <center>
                    <div class="card-header">
                        <strong class="card-title">Pendopo</strong>
                    </div>
                </center>
                <div class="card-body">
                    <table id="example" class="table table-striped">
                        <thead class="thead-dark">
                        <tr>
                            <th>No</th>
                            <th>Nama Tanaman</th>
                            <th>Jumlah</th>
                            <th>Nama Latin</th>
                            <th>Gambar</th>
                            <th>Perawatan</th>
                            <th>Action</th>
                        </tr>
                        </thead>
                        <tbody>
                        
                        @foreach ($pendopo as $pendopo)
                        <tr>
                            <th scope="row">{{$loop->iteration}}</th>
                            <td>{{$pendopo->nama_tanaman}}</td>
                            <td>{{$pendopo->jumlah}}</td>
                            <td>{{$pendopo->nama_latin}}</td>
                            <td><img src="post-images/{{$pendopo->gambar}}" alt="" width="100px"></td>
                            <td>{{$pendopo->perawatan}}</td>
                            <td>
                                <a href="/pendopo/{{$pendopo->id}}/edit" class="btn btn-warning rounded"> Edit</a>
                                <div type="submit" class="btn btn-danger rounded" onclick="fcthapus('{{$pendopo->id}}')"><i class="ti ti-trash"></i> Delete</div>
                                <a href="/pendopo/{{$pendopo->id}}" class="btn btn-info rounded"> Detail</a> 
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
                document.location.href = "{{url('pendopo/hapus/')}}" + "/" + id;
            }
        })
    }
</script>

</html>


@endsection