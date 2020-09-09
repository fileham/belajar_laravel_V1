<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;

class PegawaiController extends Controller
{
    public function index(){
        // mengambil data dari table pegawai
    	$pegawai = DB::table('pegawai')->get();
 
    	// mengirim data pegawai ke view index
    	return view('index',['pegawai' => $pegawai]);
    }
    public function formulir(){
        return view('formulir');
    }
    public function proses(Request $request){
        $nama = $request->input('nama');
     	$alamat = $request->input('alamat');
        return "Nama : ".$nama.", Alamat : ".$alamat;
}
}
