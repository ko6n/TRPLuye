<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\m_pemesanan;
use App\m_katalogharga;
use App\m_tingkatan;
use App\m_bahanbaku;
use Input;
use Validator;
use Session;
use Redirect;
use App\m_upload;

class c_perancangan extends Controller{


public function viewpemesananPerancangan(){
       $tingkatans = m_tingkatan::all();
       $pemesanans = m_pemesanan::orderBy('tanggalpesan', 'asc')->get();
       return view('viewpemesananPerancangan', compact('tingkatans','pemesanans'));	
   }


public function ubahpemesananPerancangan(Request $request, $id){
    $pemesanan = m_pemesanan::find($id);
    $pemesanan->desain              = $request->desain;   
    $pemesanan->save();
    return redirect('viewpemesanan')->with('message', 'Data berhasil diperbarui');
}


    // Menampilkan detail pemesanan berdasarkan Id pemesanan
public function detailpemesananPerancangan($id){

    $pemesanan = m_pemesanan::findOrFail($id);
    return view('editpemesananPerancangan', compact('pemesanan'));

}



    public function getView(){
      return view('desainperancangan');
    }

    public function insertFile(){



      $filetitle=Input::get('Desain');
      $file= Input::file('File');



      $rules = array(
            'Desain' => 'required',
            'File' => 'required|max:10000|mimes:doc,docx,jpeg,png,jpg'
            ); 

      // 'image' => 'required|mimes:jpeg,png,jpg,gif,svg,csv,xls,xlsx,doc,docx|m‌​ax:2048'



        // do the validation ----------------------------------
        // validate against the inputs from our form
        $validator = Validator::make(Input::all(), $rules);

      if ($validator->fails()) {

            // redirect our user back with error messages       
            $messages = $validator->messages();
        // send back to the page with the input data and errors
        return Redirect::to('uploaddesain')->withInput()->withErrors($validator);

      }else if ($validator->passes()){

        // checking file is valid.
        if (Input::file('File')->isValid()) {

          //$destinationPath = 'images/profile/'; // upload path
         $extension = Input::file('File')->getClientOriginalExtension(); // getting image extension
        $filename = rand(11111,99999).'.'.$extension; // renameing image


      // uploading file to given path

          //$destinationPath = '../uploads';//its refers proj/uploads
                $destinationPath = 'up_file';//its refers proj/public/up_file directry


                $data=array(
                    'namaperancangan' => $filetitle,
                    'file_name' => $filename,
                );


                m_upload::insert($data);


                $upload_success = $file->move($destinationPath, $filename);
                $notification = array(
                    'message' => 'File Berhasil Di upload', 
                    'alert-type' => 'success'
                );

                return Redirect::to('uploaddesain')->with($notification);

       
        }
        else {
          // sending back with error message.
          

                $notification = array(
                        'message' => 'File Upload tidak valid', 
                        'alert-type' => 'error'
                    );

                return Redirect::to('uploaddesain')->with($notification);
        }
      }



    }


    public function lihatPerancangan(){
       $tingkatans = m_tingkatan::all();
       $uploads = m_upload::orderBy('created_at', 'desc')->get();
       return view('lihatPerancangan', compact('tingkatans','uploads')); 
   }

   public function hapusPeran($id_upload)
{
    $uploads = m_upload::findOrFail($id_upload);
    $uploads->delete();
    return redirect('lihatPerancangan');
}

}

