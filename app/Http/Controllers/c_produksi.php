<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\m_pemesanan;
use App\m_katalogharga;
use App\m_tingkatan;
use App\m_bahanbaku;
use App\m_setengahjadi;
use App\m_besi;
use App\m_almunium;
use App\m_tembaga;
use App\m_kacamika;
use App\m_plastik;
use App\m_seng;

class c_produksi extends Controller{


public function showformsetengahjadi()
   {
    return view('tambahsetengahjadi');
}

public function tambahsetengahjadi(Request $request){
    if ($request->jumlah <= 0) {
    return redirect('formsetengahjadi')->with('message', 'Gagal. Data tidak valid');
}else{
    m_setengahjadi::create($request->all());
    return redirect('lihatsetengahjadi')->with('message', 'Data berhasil ditambahkan');
}
}


public function indexsetengahjadi(){
       $tingkatans = m_tingkatan::all();
       $setengahjadis = m_setengahjadi::orderBy('updated_at', 'asc')->get();
       return view('setengahjadi', compact('tingkatans','setengahjadis'));    
   }

public function ubahsetengahjadi(Request $request, $id){
    if ($request->jumlah <= 0) {
    return redirect('lihatsetengahjadi')->with('message', 'Gagal. Data tidak valid');
}else{
    $setengahjadi = m_setengahjadi::find($id);
    $setengahjadi->namabarang   	= $request->namabarang;  
    $setengahjadi->jumlah      	= $request->jumlah;  
    $setengahjadi->save();
    return redirect('lihatsetengahjadi')->with('message', 'Data berhasil diperbarui');
}
}



public function detailsetengahjadi($id){

    $setengahjadi = m_setengahjadi::findOrFail($id);
    return view('editsetengahjadi', compact('setengahjadi'));

}

public function hapussetengahjadi($id_setengahjadi)
{
    $setengahjadis = m_setengahjadi::findOrFail($id_setengahjadi);
    $setengahjadis->delete();
    return redirect('lihatsetengahjadi');
}







public function ubahbahanbakuProduksi(Request $request, $id){
    $bahanbaku = m_bahanbaku::find($id);
    $bahanbaku->jumlah        = $request->jumlah;  
    $bahanbaku->save();
    return redirect('viewbahanbaku')->with('message', 'Data berhasil diperbarui');
}

public function detailbahanbakuProduksi($id){

    $bahanbaku = m_bahanbaku::findOrFail($id);
    return view('editbahanproduksi', compact('bahanbaku'));

}


public function viewbahanbakuProduksi(){
       $tingkatans = m_tingkatan::all();
       
       $ramalbesi = m_besi::latest()->first();
       $ramalalumunium = m_almunium::latest()->first();
       $ramalseng = m_seng::latest()->first();
       $ramalplastik = m_plastik::latest()->first();
       $ramalkacamika = m_kacamika::latest()->first();
       $ramaltembaga = m_tembaga::latest()->first();
       return view('viewbahanbakuProduksi', compact('tingkatans','ramalbesi','ramalalumunium','ramalseng','ramalplastik','ramaltembaga','ramalkacamika'));

   }


}


