<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class penggunaRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return true;
    }

    public function rules()
    {
        return [
            'nama' => 'required',
            'alamat' => 'required',
            'no_telepon' => 'required|numeric',
            'umur' => 'required|numeric',
            'Username1' => 'required',
            'Password1' => 'required'
        ];
    }

    public function messages()
    {
        return [
            'nama.required' => 'Nama Tidak Boleh Kosong.',
            'alamat.required' => 'Alamat Tidak Boleh Kosong.',
            'no_telepon.required' => 'Telepon Tidak Boleh Kosong.',
            'no_telepon.numeric' => 'Data berupa angka.',
            'umur.required' => 'umur Tidak Boleh Kosong.',
            'umur.numeric' => 'Data berupa angka.',
            'Username1.required' => 'Username Tidak Boleh Kosong.',
            'Password1.required' => 'Password Tidak Boleh Kosong.'
        ];
    }
}

// $messages = array(
//         'required' => 'The :attribute is really really really important.',
//         'same'  => 'The :others must match.'
//     );