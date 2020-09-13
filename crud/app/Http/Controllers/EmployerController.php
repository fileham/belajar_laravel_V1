<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\employer;

class EmployerController extends Controller
{
    public function index(){
            //mengambil data
            $employer = employer::all();

            //mengirim ke view employer
            return view('employer',['employer'=>$employer]);
    }
}
