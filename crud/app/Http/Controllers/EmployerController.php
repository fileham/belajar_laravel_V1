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
    public function tambah(){
        return view('employer_tambah');
    }
    public function store(Request $request)
    {
    	$this->validate($request,[
    		'nama' => 'required',
    		'alamat' => 'required'
    	]);
 
        employer::create([
    		'nama' => $request->nama,
    		'alamat' => $request->alamat
    	]);
 
    	return redirect('/employer');
    }
    public function edit($id)
    {
        $employer = employer::find($id);
        return view('employer_edit', ['employer' => $employer]);
    }
    public function update($id, Request $request)
    {
        $this->validate($request,[
        'nama' => 'required',
        'alamat' => 'required'
        ]);

        $employer = employer::find($id);
        $employer->nama = $request->nama;
        $employer->alamat = $request->alamat;
        $employer->save();
        return redirect('/employer');
    }
    public function delete($id)
    {
        $employer = employer::find($id);
        $employer->delete();
        return redirect('/employer');
    }
}
