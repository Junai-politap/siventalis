<?php

namespace App\Http\Controllers;

use App\Models\Tim;
use App\Models\Foto;
use App\Models\Unit;

class TimController extends Controller
{
    public function index()
    {
        $data['list_tim'] = Tim::all();
        $data['list_foto'] = Foto::all();
        $data['list_unit'] = Unit::all();
        $data['user'] = auth()->user();

        return view('admin.tim.index',$data);
    }

    public function store()
    {
        $tim = New Tim;
        $tim->nama = request('nama');
        $tim->jabatan = request('jabatan');
        $tim->handleUploadFoto();
        $tim->save();
        return redirect('tim');
    }


    function edit(Tim $tim){
		$data['tim'] = $tim;
        $data['user'] = auth()->user();
		return view('admin.tim.edit', $data);

	}
	function update(Tim $tim){
        $tim->nama = request('nama');
        $tim->jabatan = request('jabatan');
        $tim->handleUploadFoto();
		$tim->save();
		return redirect('tim')->with('success','Data Berhasil Diedit');
    }

    function destroy(Tim $tim){
		$tim->delete();
		return redirect('tim')->with('danger','Data Berhasil Dihapus');
	}

    
    public function storefoto()
    {
        $foto = New Foto;
        $foto->nama = request('nama');
        $foto->handleUploadFoto();
        $foto->save();
        return redirect('tim');
    }

    function editfoto(Foto $foto){
		$data['foto'] = $foto;
        $data['user'] = auth()->user();
		return view('admin.tim.editdata', $data);

	}
	function updatefoto(Foto $foto){
        $foto->nama = request('nama');
        $foto->handleUploadFoto();
		$foto->save();
		return redirect('tim')->with('success','Data Berhasil Diedit');
    }

    function destroyfoto(Foto $foto){
		$foto->delete();
		return redirect('tim')->with('danger','Data Berhasil Dihapus');
	}

}
