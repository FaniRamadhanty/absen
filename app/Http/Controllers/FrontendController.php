<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use Carbon\Carbon;
use App\models\Pegawai;
class FrontendController extends Controller
{
    public function tampil()
    {
        $pegawais = Pegawai::all();
        return view('admin.pegawai.index', compact('pegawais'));
    }
}

// ,'posglobal','dunia'