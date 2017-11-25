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

class c_gudang extends Controller{


public function showformtambahbahan()
   {
    return view('tambahbahanbaku');
}
public function setData(Request $request){

     if($request->namabahan == 'besi' ){
      $stok = new m_besi();
    }
    elseif($request->namabahan == 'almunium' ){
      $stok = new m_almunium();
    }
    elseif($request->namabahan == 'tembaga' ){
      $stok = new m_tembaga();
    }
    elseif($request->namabahan == 'kacamika' ){
      $stok = new m_kacamika();
    }
    elseif($request->namabahan == 'plastik' ){
      $stok = new m_plastik();
    }
    elseif($request->namabahan == 'seng' ){
      $stok = new m_seng();
    }

    
    // $besi = new m_besi();
    // $seng = new m_seng();
    // $tembaga = new m_tembaga();

    $dataStok = $stok::all();
    $jmlDataStok = $stok::count();
    $peramalan = 0;
    $bulan = 0;

    for ($i=0; $i < $jmlDataStok; $i++) {
      $peramalan = $peramalan + $dataStok[$i]['jumlah'] * $dataStok[$i]['bulan'];
      $bulan = $bulan + $dataStok[$i]['bulan'];
    }

    $peramalan = $peramalan / $bulan;

    $data = [
      'namabahan' => $request->namabahan,
      'jumlah' => $request->jumlah,
      'bulan' => $request->bulan,
      'peramalan' => $peramalan
    ];

    $stok->insert($data);
    return redirect('lihatbahanbaku')->with('message', 'Data berhasil ditambahkan');

 
  }

public function tambahbahanbaku(Request $request){
   if ($request->jumlah <= 0) {
    return redirect('formbahanbaku')->with('message', 'Gagal. Data tidak valid');
}else{
    // m_bahanbaku::create($request->all());
    if($request->namabahan == 'besi' ){
      m_bahanbaku::create($request->all());
    }
    elseif($request->namabahan == 'almunium' ){
      m_almunium::create($request->all());
    }
    elseif($request->namabahan == 'tembaga' ){
      m_tembaga::create($request->all());
    }
    elseif($request->namabahan == 'seng' ){
      m_seng::create($request->all());
    }
    elseif($request->namabahan == 'plastik' ){
      m_plastik::create($request->all());
    }
    elseif($request->namabahan == 'kacamika' ){
      m_kacamika::create($request->all());
    }
    return redirect('lihatbahanbaku')->with('message', 'Data berhasil ditambahkan');
}
}

public function indexbahanbaku(){
        $tingkatans = m_tingkatan::all();
        $besis = m_besi::all();
        $almuniums = m_almunium::all();
        $tembagas = m_tembaga::all();
        $kacamikas = m_kacamika::all();
        $plastiks = m_plastik::all();
        $sengs = m_seng::all();
       return view('bahanbaku', compact('tingkatans','besis','almuniums','sengs','tembagas','kacamikas','plastiks'));    
   }

public function ubahbahanbaku(Request $request, $id){
  if ($request->jumlah <= 0) {
    return redirect('lihatbahanbaku')->with('message', 'Gagal. Data tidak valid');
}else{
    $bahanbaku = m_bahanbaku::find($id);
    $bahanbaku->namabahan   	= $request->namabahan;  
    $bahanbaku->jumlah      	= $request->jumlah;  
    $bahanbaku->save();
    return redirect('lihatbahanbaku')->with('message', 'Data berhasil diperbarui');
}
}

public function detailbahanbaku($id){

    $bahanbaku = m_bahanbaku::findOrFail($id);
    return view('editbahanbaku', compact('bahanbaku'));

}

public function hapusbesi($id_besi)
{
    $besis = m_besi::findOrFail($id_besi);
    $besis->delete();
    return redirect('lihatbahanbaku');
}
public function hapustembaga($id_tembaga)
{
    $tembagas = m_tembaga::findOrFail($id_tembaga);
    $tembagas->delete();
    return redirect('lihatbahanbaku');
}
public function hapusseng($id_seng)
{
    $sengs = m_seng::findOrFail($id_seng);
    $sengs->delete();
    return redirect('lihatbahanbaku');
}
public function hapusalmunium($id_almunium)
{
    $almuniums = m_almunium::findOrFail($id_almunium);
    $almuniums->delete();
    return redirect('lihatbahanbaku');
}
public function hapuspastik($id_plastik)
{
    $plastiks = m_plastik::findOrFail($id_plastik);
    $plastiks->delete();
    return redirect('lihatbahanbaku');
}
public function hapuskacamika($id_kacamika)
{
    $kacamikas = m_kacamika::findOrFail($id_kacamika);
    $kacamikas->delete();
    return redirect('lihatbahanbaku');
}



public function viewsetengahjadiGudang(){
       $tingkatans = m_tingkatan::all();
       $setengahjadis = m_setengahjadi::orderBy('updated_at', 'asc')->get();
       return view('viewsetengahjadiGudang', compact('tingkatans','setengahjadis'));    
   }

public function ubahsetengahjadiGudang(Request $request, $id){
  if ($request->jumlah <= 0) {
    return redirect('viewsetengahjadi')->with('message', 'Gagal. Data tidak valid');
}else{$setengahjadi = m_setengahjadi::find($id);  
    $setengahjadi->jumlah       = $request->jumlah;  
    $setengahjadi->save();
    return redirect('viewsetengahjadi')->with('message', 'Data berhasil diperbarui');
}
}

public function detailsetengahjadiGudang($id){

    $setengahjadi = m_setengahjadi::findOrFail($id);
    return view('editsetengahjadiGudang', compact('setengahjadi'));

}

}