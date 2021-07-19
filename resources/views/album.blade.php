@extends('layout/nav')

@section('title', 'album')

@section('containers')
<div class="container">
    <div class="row">
        <div class="col-10">
            <h1 class="mt-3" >Data Music</h1>
            
            <a class="btn btn-primary">Tambah</a >
            <?php $i=1; ?>
            <table class="table">
                <thead class="thead-dark">
                    <tr>
                        <th scope="col">No</th>
                        <th scope="col">Judul Lagu</th>
                        <th scope="col">Artis</th>
                        <th scope="col">Aksi</th>
                    </tr>
                </thead>
            @foreach( $album as $albm )
                <tbody>
                    <tr>
                        <th scope="row"><?= $i; ?></th>
                        <td>{{ $albm->judul }}</td>
                        <td>{{ $albm->nama }}</td>
                        <td><a href="">Edit</a> | <a href="">Delete</a></td>

                    </tr>
                </tbody>
            <?php $i++; ?>
            @endforeach
            </table>
        </div>
    </div>
</div>
@endsection
