<?php

namespace App\Http\Controllers\Front;

use App\Http\Controllers\Controller;
use App\Http\Requests\StorePendaftaranRequest;
use Illuminate\Http\Request;
use App\Services\FormService;
use App\Registrant;
use App\Personal;
use Carbon\Carbon;

class FormController extends Controller
{

    protected $formService;

    public function __construct(FormService $formService)
    {
        $this->formService = $formService;
    }

    public function index()
    {
        return view('front.tutup', [
            'title' => 'Pendaftaran Ditutup'
        ]);
    }

    public function store(StorePendaftaranRequest $request)
    {

        $data = $request->validated();

        $registrant = $this->formService->store($data['pendaftar']);

        return redirect(route('form.sukses', $registrant->random_char));

    }

    public function konfirmasi($kode)
    {
        $registrant = Registrant::where('random_char', $kode)->firstOrFail();

        return view('front.sukses', [
            'title' => 'Pendaftaran Berhasil',
            'registrant' => $registrant
        ]);
    }

    public function show($kode)
    {
        $registrant = Registrant::where('random_char', $kode)->firstOrFail();

        $dt = Carbon::createFromFormat('Y-m-d', $registrant->personal->tanggal_lahir);

        $usia = $dt->diffInYears(Carbon::now());

        return view('front.show', [
            'title' => 'Rincian Data Pendaftar',
            'registrant' => $registrant, 
            'dt' => $dt, 
            'usia' => $usia
        ]);
    }
}
