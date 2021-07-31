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
                <table  >
                    <tr>
                        @csrf
                    </tr>
                    <tr>
                        <td>Username</td>
                        <td><input type="text" name="username"></td>
                    </tr>
                    <tr>
                        <td>Password</td>
                        <td><input type="password" name="password"></td>
                    </tr>
                    <tr>
                        <td>
                            <button class="submit" name="tekan">Tambah</button>
                        </td>
                    </tr>
                </table>
            </form>    
        </div>
    </div>
</div>

@endsection