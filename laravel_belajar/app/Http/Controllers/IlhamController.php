<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Crypt;

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
}