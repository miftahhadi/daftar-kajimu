<?php 

namespace App\Services;

use App\Registrant;
use Carbon\Carbon;
use Illuminate\Support\Str;

class FormService
{
    public function store($data)
    {
        $registrant =Registrant::create(['random_char' => Str::random(10)]);

        $data['tanggal_lahir'] = $this->formatTanggalLahir($data['tanggal_lahir']);

        $registrant->personal()->create($data);

        return $registrant;
    }

    private function formatTanggalLahir($tanggalLahir)
    {
        $date = Carbon::createFromFormat('Y-m-d', $tanggalLahir);

        return $date->format('Y-m-d');
    }
}