<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use App\Registrant;
use Illuminate\Http\Request;

class KonfirmasiController extends Controller
{
    public function confirm(Request $request)
    {
        $data = $request->all();

        $message = $data['message'];

        $sender = $data['sender'];

        $registrant = Registrant::where('random_char', 'like', '%' . $message . '%')->first();

        $responseMsg = '';

        if (!is_null($registrant)) {
            $sapaan = ($registrant->personal->jenis_kelamin == 'Laki-laki') ? 'Bapak/Saudara' : 'Ibu/Saudari';

            $registrant->update([
                'confirmed' => 1,
                'confirmed_by' => $sender
            ]);

            $responseMsg = "Terima kasih $sapaan " . $registrant->personal->nama . " telah mendaftar pada program KAJIMU Angkatan 5. Saat ini kami masih dalam proses mengumpulkan data pendaftar. Insya Allah kami akan mengirimkan pengumuman lanjutan setelah penutupan pendaftara (30 Oktober 2020).";
        }

        $exist = !is_null($registrant) ? 'Ada' : 'Tidak ada';

        $response = [
            'data' => [
                [
                    "message" => $responseMsg
                ]
            ]
        ];

        header('Content-Type: application/json; Status Code: 200');

        return json_encode($response);
    }
}
