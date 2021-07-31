@extends('layout/nav')

@section('title', 'Home')

@section('containers')
<div class="container">
    <div class="row">
        <div class="col-10">
            <h1 class="mt-3" >Selamat Datang <?= $nama; ?></h1>

            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Sit dolorum nobis dolores consequatur, omnis asperiores, harum, eum expedita ipsum provident deserunt nam modi numquam excepturi accusamus reiciendis reprehenderit! Similique, accusantium.</p>

        </div>
    </div>
</div>
@endsection
