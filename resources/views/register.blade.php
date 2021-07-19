@extends('layout/main')

@section('title', 'About')

@section('container')
<div class="container">
    <div class="row">
        <div class="col-10">
            <h1 class="mt-3" >Halaman Registrasi</h1>

            <form action="" method="">
                <ul>
                    <li>
                        <label for="">User Name Baru</label>
                        <input type="text">
                    </li>
                    <li>
                        <label for="">Password 1</label>
                        <input type="password">
                    </li>
                    <li>
                        <label for="">Password 2</label>
                        <input type="password">
                    </li>
                    <li>
                        <button class="submit">Registrasi</button>
                    </li>
                </ul>
            </form>    
        </div>
    </div>
</div>
@endsection
