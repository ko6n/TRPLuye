<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class telurasinRequest extends FormRequest
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

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [
            'jumlahtelur1' => 'required|numeric'
            
        ];
    }

    public function messages()
    {
        return [
            'jumlahtelur1.required' => 'jumlah telur Tidak Boleh Kosong.',
            
            'jumlahtelur1.numeric' => 'Masukkan data yang valid.'
            
            
            
        ];
    }
}
