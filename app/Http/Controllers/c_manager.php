<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\m_pemesanan;
use App\m_katalogharga;
use App\m_tingkatan;
use App\m_bahanbaku;

class c_manager extends Controller{

	public function viewpemesananManager(){
       $tingkatans = m_tingkatan::all();
       $pemesanans = m_pemesanan::orderBy('tanggalpesan', 'asc')->get();
       return view('viewpemesananManager', compact('tingkatans','pemesanans'));	
   }

}