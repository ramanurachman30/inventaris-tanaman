@extends('layouts.master')
@section('title','Tanaman MMD Lt.4')
@section('content')

<div class="container d-flex justify-content-center content mt-3">
    <div class="animated fadeIn">
        <div class="row">
            <div class="col-md-12">
                <a href="/taman/create" class="btn btn-success my-3 rounded"><i class="fa fa-pencil"></i> Tambah Data</a>
            </div>
            <div class="card">
                <center>
                    <div class="card-header">
                        <strong class="card-title">Tanaman MMD</strong>
                    </div>
                </center>
                <div class="card-body">
                    <table id="example" class="table table-striped table-bordered rounded display">
                        <thead class="thead-dark">
                        <tr>
                            <th>No</th>
                            <th>Nama Buah</th>
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
                        
                        @foreach ($taman as $taman)
                        <tr>
                            <th scope="row">{{$loop->iteration}}</th>
                            <td>{{$taman->nama_buah}}</td>
                            <td>{{$taman->jumlah}}</td>
                            <td>{{$taman->nama_latin}}</td>
                            <td>{{$taman->manfaat}}</td>
                            <td><img src="post-images/{{$taman->gambar}}" alt="" width="100px"></td>
                            <td>{{$taman->perbanyakan}}</td>
                            <td>{{$taman->perawatan}}</td>
                            <td>
                                <a href="/taman/{{$taman->id}}/edit" class="btn btn-warning rounded"> Edit</a>
                                <div type="submit" class="btn btn-danger rounded" onclick="fcthapus('{{$taman->id}}')"><i class="ti ti-trash"></i> Delete</div>
                                <a href="/taman/{{$taman->id}}" class="btn btn-info rounded"> Detail</a> 
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
                document.location.href = "{{url('taman/hapus/')}}" + "/" + id;
            }
        })
    }
</script>

</html>
@endsection