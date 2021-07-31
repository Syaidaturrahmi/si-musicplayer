<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;

class Kategori extends Controller
{    
        
    public function index(){
        $nama = 'Kategori Fhoto';
        $album = DB::table('category')->get();
        return view('/kategori', ['category' => $album,
                                  'nama'=>$nama                            
        ]);

    }
    
}
