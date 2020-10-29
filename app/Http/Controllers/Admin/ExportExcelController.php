<?php

namespace App\Http\Controllers\Admin;

use App\Exports\RegistrantExport;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Rap2hpoutre\FastExcel\FastExcel;
use App\Registrant;
use Carbon\Carbon;
use Illuminate\Database\Eloquent\Builder;
use Maatwebsite\Excel\Facades\Excel;

class ExportExcelController extends Controller
{

    public function tanggal() 
    {
        return Carbon::now(new \DateTimeZone('Asia/Jakarta'));
    }

    public function filename()
    {
        $tanggal = $this->tanggal();

        return 'Pendaftar MI_' . $tanggal . '.xlsx';
    }

    public function registrants($jenisKelamin = null)
    {
        if (!is_null($jenisKelamin)) {
            $registrants = Registrant::whereHas('personal', function (Builder $query) {
                $query->where('jenis_kelamin', 'Perempuan');
            })->get();
        } else {
            $registrants = Registrant::all();
        }

        return $registrants;
    }

    public function exportExcel()
    {
        return Excel::download(new RegistrantExport, 'registrants.xlsx');
    }
}
