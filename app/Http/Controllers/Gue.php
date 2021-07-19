<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;

class Gue extends Controller
{
    public function home()
    {
        return view('index');
    }

    public function login()
    {
        return view('login');
    }

    public function register()
    {
        return view('register');
    }
    public function album()
    {
        $album = DB::table('album')->get();
        // dump($album);
        return view('album', ['album' => $album]);
    }
    
    public function musik()
    {
        $album = DB::table('album')->get();
        // dump($album);
        return view('musik', ['album' => $album]);
    }
    
    public function tambah()
    {
        return view('tambah');
    }
    
    public function edit()
    {
        return view('edit');
    }
}
