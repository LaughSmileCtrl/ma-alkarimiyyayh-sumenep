<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreArticleRequest extends FormRequest
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
            'title' => 'required',
            'author' => 'nullable|string',
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
        ];
    }
}
