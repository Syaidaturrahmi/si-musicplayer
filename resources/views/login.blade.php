@extends('layout/main')

@section('title', 'About')

@section('container')
<div class="container">
    <div class="row">
        <div class="col-10">
            <h1 class="mt-3" >Halaman Login</h1>
            <br>
            <br>
            <form action="" method="">
                <ul>
                    <li>
                        <label for="">User Name</label>
                        <input type="text">
                    </li>
                    <li>
                        <label for="">Password</label>
                        <input type="password">
                    </li>
                    <li>
                        <button class="submit">Submit</button>
                    </li>
                </ul>
            </form>    
        </div>
    </div>
</div>

@endsection
