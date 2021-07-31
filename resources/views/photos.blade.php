@extends('layout/nav')

@section('title', 'album')

@section('containers')
<div class="container">
    <div class="row">
        <div class="col-10">
            <h1 class="mt-3" >Data <?= $nama; ?></h1>
            
        <a class="btn btn-primary" href="{{ url('/tambahAlbum') }}">Tambah</a >
            <?php $i=1; ?>
            <table class="table">
                <thead class="thead-dark">
                    <tr>
                        <th scope="col">No</th>
                        <th scope="col">Nama Album</th>
                        <th scope="col">Masukan Fato</th>
                        <th scope="col">Aksi</th>
                    </tr>
                </thead>
            @foreach( $album as $albm )
                <tbody>
                    <tr>
                        <th scope="row"><?= $i; ?></th>
                        <td>{{ $albm->name }} <a href="" class="btn btn-warning">Lihat Gambar</a></td>
                        <td><a href="" class="btn btn-success">Tambahkan Gambar</a></td>
                        <td><a href="" class="btn btn-warning">Edit</a> | <a href="" class="btn btn-danger">Delete</a></td>

                    </tr>
                </tbody>
            <?php $i++; ?>
            @endforeach
            </table>
        </div>
    </div>
</div>
@endsection
