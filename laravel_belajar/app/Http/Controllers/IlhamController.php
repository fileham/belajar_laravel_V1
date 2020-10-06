<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Crypt;
use Illuminate\Support\Facades\Hash;

class IlhamController extends Controller
{
	public function enkripsi(){
		$encrypted = Crypt::encryptString('Belajar Laravel');
		$decrypted = Crypt::decryptString($encrypted);

		echo "Hasil Enkripsi : " . $encrypted;
		echo "<br/>";
		echo "<br/>";
		echo "Hasil Dekripsi : " . $decrypted;
	}
	public function hash(){
		$hash_password_saya = Hash::make('halo123');
		echo $hash_password_saya;
	}
}