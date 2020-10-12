<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class KonfirmasiController extends Controller
{
    public function confirm()
    {
        $response = [
            'data' => [
                [
                    "Halo"
                ]
            ]
        ];

        header('Content-Type: application/json; Status Code: 200');

        return json_encode($response);
    }
}
