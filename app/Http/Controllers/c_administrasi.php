<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\m_pemesanan;
use App\m_katalogharga;
use App\m_tingkatan;
use App\m_besi;
use App\m_almunium;
use App\m_tembaga;
use App\m_kacamika;
use App\m_plastik;
use App\m_seng;
use App\m_setengahjadi;

class c_administrasi extends Controller{

    // Menampilkan rekap pemesanan
    public function index(){
       $tingkatans = m_tingkatan::all();
       $pemesanans = m_pemesanan::orderBy('tanggalpesan', 'asc')->get();
       return view('pemesanan', compact('tingkatans','pemesanans'));	
   }

   public function showpemesanan(){
    $tingkatans = m_tingkatan::all();
    $kataloghargas = m_katalogharga::all();
    return view('tambahpemesanan',compact('tingkatans','kataloghargas'));
}


    // Fungsi untuk menambahkan pemesanan ke database
public function tambahpemesanan(Request $request){
    if ($request->jumlah <= 0) {
    return redirect('formpemesanan')->with('message', 'Gagal. Data tidak valid');
    }elseif ($request->harga <=0) {
    return redirect('formpemesanan')->with('message', 'Gagal. Data tidak valid');
    }else{
    m_pemesanan::create($request->all());
    return redirect('formpemesanan')->with('message', 'Data berhasil ditambahkan');
}
}

    // Mengubah data pemesanan yang telah dimasukkan
public function ubahpemesanan(Request $request, $id){
    if ($request->jumlah <= 0) {
    return redirect('lihatpemesanan')->with('message', 'Gagal. Data tidak valid');
    }elseif ($request->harga <= 0) {
    return redirect('lihatpemesanan')->with('message', 'Gagal. Data tidak valid');
    }
    else{
    $pemesanan = m_pemesanan::find($id);
    $pemesanan->nama_pemesan        = $request->nama_pemesan;  
    $pemesanan->alamat              = $request->alamat;  
    $pemesanan->no_telepon          = $request->no_telepon;  
    $pemesanan->jenis_barang        = $request->jenis_barang;  
    $pemesanan->kegunaanmesin       = $request->kegunaanmesin;  
    $pemesanan->jumlah              = $request->jumlah;  
    $pemesanan->harga               = $request->harga;  
    $pemesanan->keterangan          = $request->keterangan;  
    $pemesanan->status_jadi         = $request->status_jadi;  
    $pemesanan->desain              = $request->desain;  
    $pemesanan->tanggalpesan        = $request->tanggalpesan; 
    $pemesanan->estimasi            = $request->estimasi; 
    $pemesanan->save();
    return redirect('lihatpemesanan')->with('message', 'Data berhasil diperbarui');
}
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


public function hapuskatalog($id_katalog)
{
    $kataloghargas = m_katalogharga::findOrFail($id_katalog);
    $kataloghargas->delete();
    return redirect('lihatkatalogharga');
}




public function showkatalogharga()
   {
    return view('katalogharga');
}

public function tambahkatalogharga(Request $request){
    m_katalogharga::create($request->all());
    return redirect('formkatalogharga')->with('message', 'Data berhasil ditambahkan');
}

public function indexkatalogharga(){
       $tingkatans = m_tingkatan::all();
       $kataloghargas = m_katalogharga::orderBy('created_at', 'desc')->get();
       return view('tambahpemesanan', compact('tingkatans','kataloghargas'));    
   }


public function viewbahanbaku(){
       $tingkatans = m_tingkatan::all();
       
       $ramalbesi = m_besi::latest()->first();
       $ramalalumunium = m_almunium::latest()->first();
       $ramalseng = m_seng::latest()->first();
       $ramalplastik = m_plastik::latest()->first();
       $ramalkacamika = m_kacamika::latest()->first();
       $ramaltembaga = m_tembaga::latest()->first();
       return view('viewbahanbakuAdmin', compact('tingkatans','ramalbesi','ramalalumunium','ramalseng','ramalplastik','ramaltembaga','ramalkacamika'));

   }


}


