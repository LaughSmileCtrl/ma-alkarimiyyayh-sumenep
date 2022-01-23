<?php

namespace App\Http\Requests\Admin;

use Illuminate\Foundation\Http\FormRequest;

class StoreArticleRequest extends FormRequest
{

    public function authorize()
    {
        return true;
    }


    public function rules()
    {
        return [
            'title' => 'required|max:200',
            'author' => 'nullable|string|max:200',
            'image' => 'nullable|mimes:jpg,jpeg,gif,bmp,png',
            'content' => 'required',
        ];
    }


    public function attributes()
    {
        return [
            'title' => 'judul',
            'author' => 'penulis',
            'image' => 'gambar',
            'content' => 'konten',
        ];
    }


    public function messages()
    {
        return [
            'required' => ':attribute harus diisi',
            'mimes:jpg,jpeg,gif,bmp,png' => 'format file harus jpg,jpeg,gif,bmp,png',
            'max' => ':attribute maksimal 200 karakter'

        ];
    }
}
