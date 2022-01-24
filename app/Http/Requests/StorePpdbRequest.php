<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StorePpdbRequest extends FormRequest
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
            'name' => 'required',
            'nisn' => 'required',
            'nik' => 'required',
            'no_kk' => 'required',
            'place_of_birth' => 'required',
            'date_of_birth' => 'required',
            'gender' => 'required',
            'child_order' => 'required',
            'total_brother' => 'required',
            'phone' => 'required',
            'address' => 'required',
            'father_name' => 'required',
            'father_nik' => 'required',
            'father_place_of_birth' => 'required',
            'father_date_of_birth' => 'required',
            'father_last_education' => 'required',
            'father_profession' => 'required',
            'father_phone' => 'required',
            'father_address' => 'required',
            'mother_name' => 'required',
            'mother_nik' => 'required',
            'mother_place_of_birth' => 'required',
            'mother_date_of_birth' => 'required',
            'mother_last_education' => 'required',
            'mother_profession' => 'required',
            'mother_phone' => 'required',
            'mother_address' => 'required',
        ];
    }

    public function attributes()
    {
        return [
            'name' => 'nama',
            'no_kk' => 'nomor KK',
            'place_of_birth' => 'tempat lahir',
            'date_of_birth' => 'tanggal lahir',
            'gender' => 'jenis kelamin',
            'child_order' => 'anak ke',
            'total_brother' => 'jumlah saudara',
            'phone' => 'nomor handphone/whatsapp',
            'address' => 'alamat',
            'father_name' => 'nama ayah',
            'father_nik' => 'nik ayah',
            'father_place_of_birth' => 'tempat lahir ayah',
            'father_date_of_birth' => 'tanggal lahir ayah',
            'father_last_education' => 'pendidikan teakhir ayah',
            'father_profession' => 'pekerjaan ayah',
            'father_phone' => 'nomor handphone/whatsapp ayah',
            'father_address' => 'alamat ayah',
            'mother_name' => 'nama ibu',
            'mother_nik' => 'nik ibu',
            'mother_place_of_birth' => 'tempat lahir ibu',
            'mother_date_of_birth' => 'tanggal lahir ibu',
            'mother_last_education' => 'pendidikan teakhir ibu',
            'mother_profession' => 'pekerjaan ibu',
            'mother_phone' => 'nomor handphone/whatsapp ibu',
            'mother_address' => 'alamat ibu',
        ];
    }

    public function messages()
    {
        return [
            'required' => ':attribute harus diisi',
        ];
    }
}
