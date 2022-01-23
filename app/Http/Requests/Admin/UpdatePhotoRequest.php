<?php

namespace App\Http\Requests\Admin;

use Illuminate\Foundation\Http\FormRequest;

class UpdatePhotoRequest extends FormRequest
{

    public function authorize()
    {
        return true;
    }


    public function rules()
    {
        return [
            'title' => 'required|max:200',
            'file' => 'mimes:jpg,jpeg,gif,bmp,png',
        ];
    }


    public function attributes()
    {
        return [
            'title' => 'nama file',
        ];
    }


    public function messages()
    {
        return [
            'required' => ':attribute harus diisi',
            'mimes' => ':attribute harus jpg,jpeg,gif,bmp atau png',
            'max' => ':attribute maksimal 200 karakter'
        ];
    }
}
