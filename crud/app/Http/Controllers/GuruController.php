<?php

namespace App\Http\Controllers;

use App\Guru;
use Illuminate\Http\Request;

class GuruController extends Controller
{
    public function index(){
        $guru = Guru::all();
        return view('guru',['guru'=>$guru]);
    }
    // hapus sementara
    public function hapus($id)
    {
        $guru = Guru::find($id);
        $guru->delete();

        return redirect('/guru');
    }
    public function trash(){
        //menampilkan data tongsampah
        $guru = Guru::onlyTrashed()->get();
        return view('guru_trash', ['guru'=>$guru]);
    }
     
     // restore data guru yang dihapus
public function kembalikan($id)
{
    	$guru = Guru::onlyTrashed()->where('id',$id);
    	$guru->restore();
    	return redirect('/guru/trash');
}

    // restore semua data guru yang sudah dihapus
    public function kembalikan_semua()
    {  
            $guru = Guru::onlyTrashed();
            $guru->restore();  
            return redirect('/guru/trash');
    }
    // hapus permanen
    public function hapus_permanen($id)
    {
            // hapus permanen data guru
            $guru = Guru::onlyTrashed()->where('id',$id);
            $guru->forceDelete();

            return redirect('/guru/trash');
    }
}
