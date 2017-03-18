<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Dosen;

class DosenController extends Controller
{
    public function awal()
   {
   	return "Hello dari DosenController";
   }
   public function tambah()
   {
   	return $this->simpan();
   }
   public function simpan()
   {
   	$dosen = new Dosen();
   	$dosen->nama = 'Alma';
   	$dosen->nip = '1405';
   	$dosen->alamat = 'jalan sentosa';
   	$dosen->pengguna_id = '1';	
   	$dosen->save();   
   	return "data dengan nama pak/bu {$dosen->nama} telah disimpan";
   }
}

