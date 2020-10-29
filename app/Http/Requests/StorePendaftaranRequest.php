<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StorePendaftaranRequest extends FormRequest
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
            'pendaftar.nama' => 'required',
            'pendaftar.tanggal_lahir' => 'required',
            'pendaftar.jenis_kelamin' => 'required',
            'pendaftar.domisili' => '',
            'pendaftar.nomor_wa' => ['required', 'unique:\App\Personal,nomor_wa'],
            'pendaftar.email' => ['required', 'unique:\App\Personal,email'],
            'pendaftar.pekerjaan' => '',
            'pendaftar.pernah_haji' => '',
            'pendaftar.motivasi' => ''
        ];
    }

    public function messages()
    {
        return [
            'pendaftar.nama.required' => 'Mohon isikan nama lengkap Anda',
            'pendaftar.tanggal_lahir.required' => 'Mohon isikan tanggal lahir Anda',
            'pendaftar.jenis_kelamin.required' => 'Mohon isikan jenis kelamin Anda',
            'pendaftar.nomor_wa.required' => 'Mohon isikan nomor WhatsApp aktif Anda',
            'pendaftar.nomor_wa.unique' => 'Nomor WhatsApp ini sudah terdaftar, mohon isikan nomor lain',
            'pendaftar.email.required' => 'Mohon isikan alamat email aktif Anda',
            'pendaftar.email.unique' => 'Alamat email ini sudah terdaftar, mohon isikan alamat email lain'
        ];
    }
}
