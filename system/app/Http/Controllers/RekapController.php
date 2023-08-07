<?php

namespace App\Http\Controllers;


use Illuminate\Http\Request;
use App\Models\Inventaris;
use App\Models\Pegawai;
use App\Models\Ruangan;
use App\Models\Unit;
use App\Models\User;
use App\Models\Kondisi;

class RekapController extends Controller
{

    public function index()
    {
   
        $data['list_inventaris'] = Inventaris::orderBy('id', 'ASC')->take(1)->get();
        $data['data_inventaris'] = Inventaris::all();
        
        $data['list_unit'] = Unit::all();
        $data['list_pegawai'] = Pegawai::all();
        $data['list_ruangan'] = Ruangan::all();
        $data['user'] = auth()->user();
        return view('admin.rekap.index', $data); 
    }

    
    function show(Unit $unit){
       
        $data['unit'] = $unit;
        $data['list_inventaris'] = Inventaris::all();
        $data['list_unit'] = Unit::all();
        $data['list_pegawai'] = Pegawai::all();
        $data['list_ruangan'] = Ruangan::all();
        $data['user'] = auth()->user();
		return view('admin.rekap.show', $data);
	}

    
    public function cetak(Unit $unit)
    {
   
        $data['unit'] = $unit;
        $data['list_inventaris'] = Inventaris::all();
        $data['list_unit'] = Unit::all();
        $data['list_pegawai'] = Pegawai::all();
        $data['list_ruangan'] = Ruangan::all();
        $data['user'] = auth()->user();
        return view('admin.rekap.cetak', $data);
    }

  


}
