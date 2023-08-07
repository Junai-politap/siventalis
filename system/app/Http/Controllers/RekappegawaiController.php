<?php

namespace App\Http\Controllers;

use App\Models\Inventaris;
use App\Models\Pegawai;
use App\Models\Ruangan;
use App\Models\Unit;
use App\Models\User;
use App\Models\Kondisi;

class RekappegawaiController extends Controller
{

    public function index()
    {   
        $data['pegawai'] = auth()->guard('pegawai')->user();
        $data['list_inventaris'] = Inventaris::all();
        return view('adminpegawai.rekap.index', $data);
    }

    public function cetakpegawai(Unit $unit)
    {
   
        $data['unit'] = $unit;
        $data['list_inventaris'] = Inventaris::all();
        $data['list_unit'] = Unit::all();
        $data['list_pegawai'] = Pegawai::all();
        $data['list_ruangan'] = Ruangan::all();
        $data['pegawai'] = auth()->guard('pegawai')->user();
        return view('adminpegawai.rekap.cetakbarcode', $data);
    }

   



}
