<?php

namespace App\Http\Controllers;

use App\Models\Inventaris;
use App\Models\Pegawai;
use App\Models\Ruangan;
use App\Models\Unit;
use App\Models\Kondisi;
use App\Model\User;
use Auth;

class RuanganpegawaiController extends Controller
{
    public function indexruangan()
    {  $data['list_inventaris'] = Inventaris::orderBy('id', 'ASC')->take(1)->get();
        $data['data_inventaris'] = Inventaris::all();

        $data['list_ruangan'] = Ruangan::orderBy('id', 'ASC')->take(1)->get();
        $data['data_ruangan'] = Ruangan::all();
   
        $data['list_pegawai'] = Pegawai::all();
        $data['list_unit'] = Unit::all();
        $data['pegawai'] = auth()->guard('pegawai')->user();
        $data['user'] = auth()->user();

        return view('adminpegawai.ruangan.index', $data);
    }

    public function storeruangan()
    {
        $ruangan = New Ruangan;
        $ruangan->nama_ruangan = request('nama_ruangan');
        $ruangan->id_unit = request('id_unit');
        $ruangan->id_pegawai = request('id_pegawai');
        $ruangan->handleUploadFotoRuangan();
        $ruangan->save();
        return redirect('ruanganpegawai');
    }


    function showruangan(Unit $unit){
        $data['pegawai'] = auth()->guard('pegawai')->user();
        $data['unit'] = $unit;
        $data['list_pegawai'] = Pegawai::all();
        $data['list_ruangan'] = Ruangan::all();
        return view('adminpegawai.ruangan.show', $data);
    }

    function showruanganpegawai(Ruangan $ruangan){
        $data['pegawai'] = auth()->guard('pegawai')->user();
		$data['ruangan'] = $ruangan;
        $data['list_inventaris'] = Inventaris::all();
        $data['list_ruangan'] = Ruangan::all();
        $data['list_kondisi'] = Kondisi::all();
		return view('adminpegawai.ruangan.detail', $data);
	}


    function editruangan(Ruangan $ruangan){
		$data['ruangan'] = $ruangan;
        $data['pegawai'] = auth()->guard('pegawai')->user();
         $data['list_pegawai'] = Pegawai::all();
        $data['list_unit'] = Unit::all();
        return view('adminpegawai.ruangan.edit', $data);
    }
    function updateruangan(ruangan $ruangan)
    {
        $ruangan->nama_ruangan = request('nama_ruangan');
        $ruangan->id_unit = request('id_unit');
        $ruangan->id_pegawai = request('id_pegawai');
        $ruangan->handleUploadFotoRuangan();
        $ruangan->save();

        return redirect('ruanganpegawai')->with('success', 'Data Berhasil Diedit');
    }

    function destroyruangan(Ruangan $ruangan)
    {
        $ruangan->delete();
        return redirect('ruanganpegawai')->with('danger', 'Data Berhasil Dihapus');
    }

    public function profilruangan()
    {
        $data['pegawai'] = auth()->guard('pegawai')->user();
        return view('adminpegawai.ruangan.index', $data);
    }
}
