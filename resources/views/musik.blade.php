@extends('layout/nav')

@section('title', 'musik')

@section('containers')
<div class="container">
    <div class="row">
        <div class="col-10">
            <h1 class="mt-3" >Data Music</h1>
            <?php $i = 1; ?>
            <table class="table">
                <thead class="thead-dark">
                    <tr>
                        <th scope="col">No</th>
                        <th scope="col">Musik</th>
                    </tr>
                </thead>
            @foreach( $album as $albm )
                <tbody>
                    <tr>
                        <th scope="row"><?= $i; ?></th>
                        <td>{{ $albm->musik }}</td>
                    </tr>
                </tbody>
            <?php $i++; ?>
            @endforeach
            </table>
        </div>
    </div>
</div>
@endsection
