<?php

namespace App\Http\Requests\Admin;

use Illuminate\Foundation\Http\FormRequest;

class UpdateGraduateRequest extends FormRequest
{

    public function authorize()
    {
        return true;
    }


    public function rules()
    {
        return [
            'name' => 'required',
            'nisn' => 'required',
            'year' => 'required',
        ];
    }


    public function attributes()
    {
        return [
            'name' => 'nama',
            'year' => 'tahun lulus',
        ];
    }


    public function messages()
    {
        return [
            'required' => ':attribute harus diisi',
        ];
    }
}
