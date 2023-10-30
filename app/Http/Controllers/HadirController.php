<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Hadir;
use App\Models\Pegawai;
class HadirController extends Controller
{
    public function index()
{
    $hadir = Hadir::all();
    return view('admin.hadir.index',compact('hadir'));
}
    public function create()
    {
        $hadir=Hadir::all();
        return view('admin.hadir.create', compact('hadir'));
    }

    
    public function store(Request $request)
    {
       
        $hadir = new Hadir();
        $hadir->id_pekerja =$request->id_pekerja;
        $hadir->aktivitas = $request->aktivitas;
        $kehadiran->save();
        return redirect()->route('hadir.index')
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
