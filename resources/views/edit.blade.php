@extends('layout/blank')

@section('title', 'About')

@section('container')
<div class="container">
    <div class="row">
        <div class="col-10">
            <h1 class="mt-3" >Halaman Registrasi</h1>

            <form action="" method="">
                <ul>
                    <li>
                        <label for="">Judul Lagu </label>
                        <input type="text">
                    </li>
                    <li>
                        <label for="">Artis</label>
                        <input type="text">
                    </li>
                    <li>
                        <label for="">Musik</label>
                        <input type="text">
                    </li>
                    <li>
                        <button class="submit">Simpan</button>
                    </li>
                </ul>
            </form>    
        </div>
    </div>
</div>
@endsection
