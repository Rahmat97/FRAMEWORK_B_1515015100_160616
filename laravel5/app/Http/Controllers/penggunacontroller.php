<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\pengguna;

class penggunacontroller extends Controller
{
    public function awal()
    {
    	return "Hellow dari PenggunaController";
    }
     public function tambah()
    {
    	return $this->simpan();
    }
    public function simpan()
   {
   	$pengguna = new pengguna();
   	$pengguna->username = 'rahmathidayat';
   	$pengguna->password = '1515015100';
   	$pengguna->save();
   	return "data dengan username {$pengguna->username} telah disimpan";
   }

}
