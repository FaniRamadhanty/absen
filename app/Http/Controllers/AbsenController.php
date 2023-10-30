<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Absen;
use App\Models\Pegawai;
use App\Models\Kehadiran;
use App\Models\Hadir;
class AbsenController extends Controller
{
    public function index()
{
    $absen = Absen::all();
    return view('admin.absen.index',compact('absen'));
}
    public function create()
    {
        $absen=Absen::all();
        return view('admin.absen.create', compact('absen'));
    }

    
    public function store(Request $request)
    {
       
        $absen = new Absen();
        $absen->id_pegawai =$request->id_pegawai;
        $absen->id_kehadiran = $request->id_kehadiran;
        $absen->id_hadir = $request->id_hadir;
        $absen->save();
        return redirect()->route('absen.index')
        ->with(['success' => 'Data berhasil di input!']);
    }

   
    public function show( $id)
    {
        

        // $kehadiran = Kehadiran::findOrFail($id);
        // $pegawai=Pegawai::all();
        // return view ('admin.kehadiran.show' , compact('kehadiran' , 'pegawai'));
    }

    
    public function edit( $id)
    {

        // $kehadiran = Kehadiran::findOrFail($id);
        // $pegawai=Pegawai::all();
        // return view ('admin.kehadiran.edit' , compact('kehadiran' , 'pegawai'));
    }

    
    public function update(Request $request, $id)
    {
        // $kehadiran = Kehadiran::findOrfail($id);
        // $kehadiran->id_pegawai =$request->id_pegawai;
        // $kehadiran->tgl_awal = $request->tgl_awal;
        // $kehadiran->tgl_akhir = $request->tgl_akhir;
        // $kehadiran->save();
        // return redirect()->route('kehadiran.index')
        // ->with(['info' => 'Data berhasil di Edit!']);
    }

    
    public function destroy( $id)
    {
        // $kehadiran = Kehadiran::findOrFail($id);
        // $kehadiran->delete();
        // return redirect()->route('kehadiran.index')->with(['error' => 'Data berhasil di hapus!']);
    }
}
