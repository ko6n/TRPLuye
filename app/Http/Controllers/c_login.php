<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests;
use App\m_tingkatan;

class c_login extends Controller
{

    public function login(Request $request)
    {
        $tingkatan = m_tingkatan::where('username',$request->username)->first(); 
        if (count($tingkatan)==0) {
            $request->session()->put('alertUsername','Username dan Password Kosong / Tidak Sesuai');
            return view('masuk');
        } else {
            if ($request->password != $tingkatan->password ) {
                $request->session()->put('alertPassword','Password Anda Tidak Sesuai');
                return view('masuk');
            } else {
                $request->session()->forget('alertUsername');
                $request->session()->forget('alertPassword');
                $request->session()->put('id',$tingkatan->id_tingkatan);
                if ($tingkatan->tingkat=='manager') {
                    session()->put('id',$tingkatan->id_tingkatan);
                    return view('homeManager',compact('tingkatan'));

                } elseif ($tingkatan->tingkat=='administrasi') {
                    session()->put('id',$tingkatan->id_tingkatan);
                    return view('homeAdministrasi',compact('tingkatan'));

                } elseif ($tingkatan->tingkat=='perancangan') {
                    session()->put('id',$tingkatan->id_tingkatan);
                    return view('homePerancangan',compact('tingkatan'));

                } elseif ($tingkatan->tingkat=='gudang') {
                    session()->put('id',$tingkatan->id_tingkatan);
                    return view('homeGudang',compact('tingkatan'));

                } elseif ($tingkatan->tingkat=='produksi') {
                    session()->put('id',$tingkatan->id_tingkatan);
                    return view('homeProduksi',compact('tingkatan'));

                } else {
                    return view('homePerakitan');
                }
            }   
        }
    }

    public function logout(request $request)
    {
        $request->session()->forget('alertUsername');
        $request->session()->forget('alertPassword');
        $request->session()->forget('id');
        $request->session()->forget('luasLahan');
        $request->session()->forget('umurPadi');
        $request->session()->forget('kadarK');
        $request->session()->forget('kadarP');
        $request->session()->forget('kadarN');
        $request->session()->forget('ph');
        $request->session()->forget('urea');
        $request->session()->forget('za');
        $request->session()->forget('sp36');
        $request->session()->forget('KCLN');
        $request->session()->forget('KCLJ');
        return view('masuk');
    }

}
