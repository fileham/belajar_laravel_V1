<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DosenController extends Controller
{
    //
    public function index(){
        $nama = "Diki Alfarabi Hadi";
 
    	$pelajaran = ["Algoritma & Pemrograman","Kalkulus","Pemrograman Web"];
 
    	return view('biodata',['nama' => $nama , 'matkul' => $pelajaran]);
    }
}
