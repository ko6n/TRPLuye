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

// public function ubahbahanbaku(Request $request, $id){
//   if ($request->jumlah <= 0) {
//     return redirect('lihatbahanbaku')->with('message', 'Gagal. Data tidak valid');
// }else{
//     $bahanbaku = m_bahanbaku::find($id);
//     $bahanbaku->namabahan   	= $request->namabahan;  
//     $bahanbaku->jumlah      	= $request->jumlah;  
//     $bahanbaku->save();
//     return redirect('lihatbahanbaku')->with('message', 'Data berhasil diperbarui');
// }
// }

// public function editbahanbakuGudang(Request $request, $id){
//   if ($request->jumlah <= 0) {
//     return redirect('viewbahanbakuGudang')->with('message', 'Gagal. Data tidak valid');
// }else{
//     $besi = m_besi::find($id);
//     $almunium = m_almunium::find($id);
//     $tembaga = m_tembaga::find($id);
//     $kacamika = m_kacamika::find($id);
//     $plastik = m_plastik::find($id);
//     $seng = m_seng::find($id);
//     $besi->jumlah        = $request->jumlah; 
//     $almunium->jumlah        = $request->jumlah; 
//     $tembaga->jumlah        = $request->jumlah; 
//     $kacamika->jumlah        = $request->jumlah; 
//     $plastik->jumlah        = $request->jumlah;
//     $seng->jumlah        = $request->jumlah; 
//     $besi->save();
//     $almunium->save();
//     $tembaga->save();
//     $kacamika->save();
//     $plastik->save();
//     $seng->save();
//     return redirect('viewbahanbakuGudang')->with('message', 'Data berhasil diperbarui');
// }
// }

// public function detailbahanbaku($id){

//     $besi = m_besi::findOrFail($id);
//     $almunium = m_almunium::findOrFail($id);
//     $tembaga = m_tembaga::findOrFail($id);
//     $kacamika = m_kacamika::findOrFail($id);
//     $plastik = m_plastik::findOrFail($id);
//     $seng = m_seng::findOrFail($id);
//     return view('editbahanbakuGudang', compact('besi','almunium','tembaga','kacamika','plastik','seng'));

// }


public function editbesi(Request $request, $id){
  if ($request->jumlah <= 0) {
    return redirect('viewbahanbakuGudang')->with('message', 'Gagal. Data tidak valid');
}else{
    $besi = m_besi::find($id);
    $besi->jumlah        = $request->jumlah; 
    $besi->save();
    return redirect('viewbahanbakuGudang')->with('message', 'Data berhasil diperbarui');
}
}

public function editalmunium(Request $request, $id){
  if ($request->jumlah <= 0) {
    return redirect('viewbahanbakuGudang')->with('message', 'Gagal. Data tidak valid');
}else{
    $almunium = m_almunium::find($id);
    $almunium->jumlah        = $request->jumlah; 
    $almunium->save();
    return redirect('viewbahanbakuGudang')->with('message', 'Data berhasil diperbarui');
}
}

public function edittembaga(Request $request, $id){
  if ($request->jumlah <= 0) {
    return redirect('viewbahanbakuGudang')->with('message', 'Gagal. Data tidak valid');
}else{
    $tembaga = m_tembaga::find($id);
    $tembaga->jumlah        = $request->jumlah; 
    $tembaga->save();
    return redirect('viewbahanbakuGudang')->with('message', 'Data berhasil diperbarui');
}
}

public function editkacamika(Request $request, $id){
  if ($request->jumlah <= 0) {
    return redirect('viewbahanbakuGudang')->with('message', 'Gagal. Data tidak valid');
}else{
    $kacamika = m_kacamika::find($id);
    $kacamika->jumlah        = $request->jumlah; 
    $kacamika->save();
    return redirect('viewbahanbakuGudang')->with('message', 'Data berhasil diperbarui');
}
}

public function editplastik(Request $request, $id){
  if ($request->jumlah <= 0) {
    return redirect('viewbahanbakuGudang')->with('message', 'Gagal. Data tidak valid');
}else{
    $plastik = m_plastik::find($id);
    $plastik->jumlah        = $request->jumlah; 
    $plastik->save();
    return redirect('viewbahanbakuGudang')->with('message', 'Data berhasil diperbarui');
}
}

public function editseng(Request $request, $id){
  if ($request->jumlah <= 0) {
    return redirect('viewbahanbakuGudang')->with('message', 'Gagal. Data tidak valid');
}else{
    $seng = m_seng::find($id);
    $seng->jumlah        = $request->jumlah; 
    $seng->save();
    return redirect('viewbahanbakuGudang')->with('message', 'Data berhasil diperbarui');
}
}


public function detailbesi($id){

    $besi = m_besi::findOrFail($id);
    return view('editbahanbesi', compact('besi'));

}

public function detailalmunium($id){

    $almunium = m_almunium::findOrFail($id);
    return view('editbahanalmunium', compact('almunium'));

}

public function detailtembaga($id){

    $tembaga = m_tembaga::findOrFail($id);
    return view('editbahantembaga', compact('tembaga'));

}

public function detailkacamika($id){

    $kacamika = m_kacamika::findOrFail($id);
    return view('editbahankacamika', compact('kacamika'));

}

public function detailplastik($id){

    $plastik = m_plastik::findOrFail($id);
    return view('editbahanplastik', compact('plastik'));

}

public function detailseng($id){

    $seng = m_seng::findOrFail($id);
    return view('editbahanseng', compact('seng'));

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

public function viewbahanbakuGudang(){
       $tingkatans = m_tingkatan::all();
       
       $ramalbesi = m_besi::latest()->first();
       $ramalalumunium = m_almunium::latest()->first();
       $ramalseng = m_seng::latest()->first();
       $ramalplastik = m_plastik::latest()->first();
       $ramalkacamika = m_kacamika::latest()->first();
       $ramaltembaga = m_tembaga::latest()->first();
       return view('viewbahanbakuGudang', compact('tingkatans','ramalbesi','ramalalumunium','ramalseng','ramalplastik','ramaltembaga','ramalkacamika'));

   }


}