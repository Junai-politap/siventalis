<?php

namespace App\Http\Controllers;

use App\Models\Inventaris;
use App\Models\Pegawai;
use App\Models\Ruangan;
use App\Models\Unit;
use App\Models\User;
use App\Models\Kondisi;

class RuanganController extends Controller
{
    public function index()
    {
        $data['list_inventaris'] = Inventaris::orderBy('id', 'ASC')->take(1)->get();
        $data['data_inventaris'] = Inventaris::all();

        $data['list_ruangan'] = Ruangan::orderBy('id', 'ASC')->take(1)->get();
        $data['data_ruangan'] = Ruangan::all();

        $data['list_pegawai'] = Pegawai::all();
        $data['list_unit'] = Unit::all();
        $data['user'] = auth()->user();

        return view('admin.ruangan.index',$data);
    }

    public function store()
    {
        $ruangan = New Ruangan;
        $ruangan->nama_ruangan = request('nama_ruangan');
        $ruangan->id_unit = request('id_unit');
        $ruangan->id_pegawai = request('id_pegawai');
        $ruangan->handleUploadFotoRuangan();
        $ruangan->save();
        return back()->with('success','Data Ruangan Berhasil Ditambahkan');
    }


    function show(Unit $unit){
        $data['user'] = auth()->user();
		$data['unit'] = $unit;
        $data['list_pegawai'] = Pegawai::all();
        $data['list_ruangan'] = Ruangan::all();
		return view('admin.ruangan.show', $data);
	}

    function showruangan(Ruangan $ruangan){
        $data['user'] = auth()->user();
		$data['ruangan'] = $ruangan;
        $data['list_inventaris'] = Inventaris::all();
        $data['list_ruangan'] = Ruangan::all();
        $data['list_kondisi'] = Kondisi::all();
		return view('admin.ruangan.detail', $data);
	}

    function edit(Ruangan $ruangan){
		$data['ruangan'] = $ruangan;
        $data['user'] = auth()->user();
         $data['list_pegawai'] = Pegawai::all();
        $data['list_unit'] = Unit::all();
		return view('admin.ruangan.edit', $data);

	}
    public function update(Ruangan $ruangan){

        $ruangan->nama_ruangan = request('nama_ruangan');
        $ruangan->id_unit = request('id_unit');
        $ruangan->id_pegawai = request('id_pegawai');
        $ruangan->handleUploadFotoRuangan();
		$ruangan->save();

		return redirect('ruangan')->with('success','Data Berhasil Diedit');
    }

    function destroy(Ruangan $ruangan){
		$ruangan->delete();
		return redirect('ruangan')->with('danger','Data Berhasil Dihapus');
	}

}
