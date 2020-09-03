<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DosenController extends Controller
{
    //
    public function index(){
        $nama = "Diki Alfarabi Hadi";
    	return view('biodata',['nama' => $nama]);
    }
}
