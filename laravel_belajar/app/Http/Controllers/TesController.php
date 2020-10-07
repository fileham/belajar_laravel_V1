<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class TesController extends Controller
{
    // menampilkan  isi session
    public function tampilkanSession(Request $request){
        if($request->session()->has('nama')){
            echo $request->session()->has('nama');
        }else{
            echo 'Tidak ada data dalam session';
        }
    }

    //membuat session
    public function buatSession(Request $request){
        $request->session()->put('nama','Ilham Fahmi F');
        echo "Data telah ditambahkan ke session";
    }

    //menghapus session
    public function hapusSession(Request $request){
        $request->session()->forget('nama');
        echo "Data telah dihapus dari session";
    }
}
