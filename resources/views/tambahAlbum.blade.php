@extends('layout/blank')

@section('title', 'About')

@section('container')
<div class="container">
    <div class="row">
        <div class="col-10">
            <br>
            <h1>Tambah Album</h1>
            <br>
            <form action="/tambahAlbum" method="POST">
                <table  >
                    <tr>
                        @csrf
                    </tr>
                    <tr>
                        <td>Tittle Foto</td>
                        <td><input type="text" name="title"></td>
                    </tr>
                    <tr>
                        <td>Caption Foto</td>
                        <td><input type="text" name="text"></td>
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
