<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\m_pemesanan;
use App\m_katalogharga;
use App\m_tingkatan;

class c_administrasi extends Controller{

    // Menampilkan rekap pemesanan
    public function index(){
       $tingkatans = m_tingkatan::all();
       $pemesanans = m_pemesanan::orderBy('tanggalpesan', 'asc')->get();
       return view('pemesanan', compact('tingkatans','pemesanans'));	
   }



   public function showpemesanan(){
    return view('tambahpemesanan');
}


    // Fungsi untuk menambahkan pemesanan ke database
public function tambahpemesanan(Request $request){
    m_pemesanan::create($request->all());
    return redirect('formpemesanan')->with('message', 'Data berhasil ditambahkan');
}

    // Mengubah data pemesanan yang telah dimasukkan
public function ubahpemesanan(Request $request, $id){
    $pemesanan = m_pemesanan::find($id);
    $pemesanan->nama_pemesan      = $request->nama_pemesan;  
    $pemesanan->alamat              = $request->alamat;  
    $pemesanan->no_telepon          = $request->no_telepon;  
    $pemesanan->jenis_barang        = $request->jenis_barang;  
    $pemesanan->kegunaanmesin       = $request->kegunaanmesin;  
    $pemesanan->jumlah              = $request->jumlah;  
    $pemesanan->harga               = $request->harga;  
    $pemesanan->status_jadi         = $request->status_jadi;  
    $pemesanan->desain              = $request->desain;  
    $pemesanan->tanggalpesan        = $request->tanggalpesan;  
    $pemesanan->save();
    return redirect('lihatpemesanan')->with('message', 'Data berhasil diperbarui');
}


    // Menampilkan detail pemesanan berdasarkan Id pemesanan
public function detailpemesanan($id){

    $pemesanan = m_pemesanan::findOrFail($id);
    return view('editpemesanan', compact('pemesanan'));

}

public function hapuspemesanan($id_pemesanan)
{
    $pemesanans = m_pemesanan::findOrFail($id_pemesanan);
    $pemesanans->delete();
    return redirect('lihatpemesanan');
}





public function showkatalogharga()
   {
    return view('katalogharga');
}

public function tambahkatalogharga(Request $request){
    m_katalogharga::create($request->all());
    return redirect('formkatalogharga')->with('message', 'Data berhasil ditambahkan');
}



}


