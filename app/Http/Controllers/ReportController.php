<?php

namespace App\Http\Controllers;

use App\Models\Provinsi;
use App\Models\Kasus;
use App\Models\Rw;
use App\Models\Kota;
use Illuminate\Http\Request;
use PDF;

class ReportController extends Controller
{
    public function getReportProvinsi()
    {
        return view('report.index');
    }

    public function ReportProvinsi(Request $request)
    {
        $awal = $request->awal;
        $akhir = $request->akhir;
        if ($awal < $akhir) {

            $provinsi = Provinsi::select('provinsis.id', 'provinsis.nama_provinsi', 
                                        'provinsis.kode_provinsi', 'kasuses.tanggal',
                                        'kasuses.positif', 'kasuses.sembuh', 
                                        'kasuses.meninggal')
                ->join('kotas', 'provinsis.id', '=', 'kotas.id_provinsi')
                ->join('kecamatans', 'kotas.id', '=', 'kecamatans.id_kota')
                ->join('desas', 'kecamatans.id', '=', 'desas.id_kecamatan')
                ->join('rws', 'desas.id', '=', 'rws.id_desa')
                ->join('kasuses', 'rws.id', '=', 'kasuses.id_rw')
                ->whereBetween('kasuses.tanggal', [$awal, $akhir])
                ->get();
            return view('report.index', compact('provinsi',));
        } elseif ($awal > $akhir) {
            return redirect()->back()->with(['error' => 'Tanggal yang dimasukkan tidak valid']);

        }
    }
    
    
    public function kasus()
    {
        $kasus= Kasus::with('rw')->get();
        $pdf = PDF::loadView('report.kasuspdf', compact('kasus'));
        return $pdf->download('laporan-kasus.pdf');
    }
}