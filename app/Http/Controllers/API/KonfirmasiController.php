<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class KonfirmasiController extends Controller
{
    public function konfirm()
    {
        $body = file_get_contents('php://input');

        $object = json_decode($body, true);

        $txt = $object['phone'] . ' : ' . $object['value'];
        $myfile = file_put_contents(storage_path('logs.txt'), $txt.PHP_EOL, FILE_APPEND | LOCK_EX);

        $response = [];

        $response['phone'] = $object['phone'];
        $response['type'] = 'text';

        if ($object['value'] == 'Tes') {
            $response['value'] = 'Tes juga';
        }

        header('Content-Type: application/json; Status Code: 200');

        return json_encode($response);
    }
}
