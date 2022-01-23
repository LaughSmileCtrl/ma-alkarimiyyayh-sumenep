<?php

namespace App\Http\Requests\Admin;

use Illuminate\Foundation\Http\FormRequest;

class StoreTeacherRequest extends FormRequest
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
            'name' => 'required|max:200',
            'subject' => 'required|max:200',
            'file' => 'nullabel|mimes:jpg,jpeg,gif,bmp,png',
        ];
    }


    public function attributes()
    {
        return [
            'title' => 'nama',
            'subject' => 'mata pelajaran'
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
