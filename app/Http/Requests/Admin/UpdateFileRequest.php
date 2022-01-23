<?php

namespace App\Http\Requests\Admin;

use Illuminate\Foundation\Http\FormRequest;

class UpdateFileRequest extends FormRequest
{
    public function authorize()
    {
        return true;
    }


    public function rules()
    {
        return [
            'title' => 'required|max:200',
            'file' => 'file',
            'isPublic' => 'boolean|nullable',
        ];
    }

    
    public function attributes()
    {
        return [
            'title' => 'nama file',
            'isPublic' => 'visibilitas',
        ];
    }


    public function messages()
    {
        return [
            'required' => ':attribute harus diisi',
            'file' => ':attribute harus file',
            'boolean' => ':attribute harus diisi',
            'max' => ':attribute maksimal 200 karakter'
        ];
    }
}
