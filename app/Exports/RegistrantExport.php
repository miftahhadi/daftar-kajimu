<?php

namespace App\Exports;

use App\Registrant;
use Maatwebsite\Excel\Concerns\FromCollection;
use Maatwebsite\Excel\Concerns\ShouldAutoSize;
use Maatwebsite\Excel\Concerns\WithHeadings;
use Maatwebsite\Excel\Concerns\WithMapping;

class RegistrantExport implements FromCollection, WithHeadings, ShouldAutoSize, WithMapping
{
    // protected $registrant;

    // public function __construct(Registrant $registrant)
    // {
    //     $this->registrant = $registrant;
    // }
    
    public function collection()
    {
        return Registrant::with('personal')->get();
    }

    public function map($registrant): array
    {
        return [
            $registrant->id,
            $registrant->random_char,
            $registrant->created_at,
            $registrant->personal->nama,
            $registrant->personal->tanggal_lahir,
            $registrant->personal->jenis_kelamin,
            $registrant->personal->domisili,
            $registrant->personal->email,
            $registrant->personal->nomor_wa,
            $registrant->personal->pekerjaan,
            $registrant->personal->pernah_haji,
            $registrant->personal->motivasi,
            $registrant->confirmed,
            $registrant->confirmed_by
        ];
    }

    public function headings(): array
    {
        return [
            '#',
            'ID Pendaftaran',
            'Tanggal Pendaftaran',
            'Nama',
            'Tanggal Lahir',
            'Jenis Kelamin',
            'Domisili',
            'Email',
            'Nomor WA',
            'Pekerjaan',
            'Sudah Pernah Haji?',
            'Motivasi Mendaftar',
            'Sudah Konfirmasi?',
            'Dikonfirmasi Oleh'
        ];
    }
}
