<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\m_pemesanan;
use App\m_katalogharga;
use App\m_tingkatan;
use App\m_bahanbaku;
use App\m_setengahjadi;
use App\m_upload;

class c_perakitan extends Controller{


public function viewpemesananPerakitan(){
       $tingkatans = m_tingkatan::all();
       $pemesanans = m_pemesanan::orderBy('tanggalpesan', 'asc')->get();
       return view('viewpemesananPerakitan', compact('tingkatans','pemesanans'));	
   }


public function ubahpemesananPerakitan(Request $request, $id){
    $pemesanan = m_pemesanan::find($id);
    $pemesanan->status_jadi              = $request->status_jadi;   
    $pemesanan->save();
    return redirect('viewpemesananperakitan')->with('message', 'Data berhasil diperbarui');
}


    // Menampilkan detail pemesanan berdasarkan Id pemesanan
public function detailpemesananPerakitan($id){

    $pemesanan = m_pemesanan::findOrFail($id);
    return view('editpemesananPerakitan', compact('pemesanan'));
}


public function viewsetengahjadiPerakitan(){
       $tingkatans = m_tingkatan::all();
       $setengahjadis = m_setengahjadi::orderBy('updated_at', 'asc')->get();
       return view('viewsetengahjadiPerakitan', compact('tingkatans','setengahjadis'));    
   }



public function lihatdesainPerakitan(){
       $tingkatans = m_tingkatan::all();
       $uploads = m_upload::orderBy('created_at', 'desc')->get();
       return view('viewdesainPerakitan', compact('tingkatans','uploads')); 
   }


}