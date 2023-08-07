<?php

namespace App\Http\Controllers;

use App\Models\Pegawai;
use App\Models\User;
use App\Models\Unit;


class PegawaiController extends Controller
{
    public function index()
    {
        $data['list_pegawai'] = Pegawai::all();
        $data['list_unit'] = Unit::all();
        $data['user'] = auth()->user();
        return view('admin.pegawai.index', $data);
    }


    function create()
    {
        return view('admin.pegawai.create');
    }

    public function store()
    {

        $pegawai = new Pegawai;
        $pegawai->nip = request('nip');
        $pegawai->nup = request('nup');
        $pegawai->nik_ktp = request('nik_ktp');
        $pegawai->nama = request('nama');
        $pegawai->username = request('username');
        $pegawai->confirmasi_password = request('confirmasi_password');
        $pegawai->password = request('confirmasi_password');
        $pegawai->id_unit = request('id_unit');
        $pegawai->gelar_depan= request('gelar_depan');
        $pegawai->gelar_belakang = request('gelar_belakang');
        $pegawai->tempat_lahir = request('tempat_lahir');
        $pegawai->tanggal_lahir = request('tanggal_lahir');
        $pegawai->jenis_kelamin = request('jenis_kelamin');
        $pegawai->agama = request('agama');
     
        $pegawai->handleUploadFoto();
        $pegawai->save();

        return redirect('pegawai')->with('success', 'Data Pegawai Berhasil Ditambahkan');
    }

    function show(Pegawai $pegawai)
    {
        $data['user'] = auth()->user();
        $data['pegawai'] = $pegawai;
        return view('admin.pegawai.show', $data);
    }
    function edit(Pegawai $pegawai)
    {
        $data['user'] = auth()->user();
        $data['pegawai'] = $pegawai;
        $data['list_unit'] = Unit::all();
        return view('admin.pegawai.edit', $data);
    }
    function update(Pegawai $pegawai)
    {
        $pegawai->nip = request('nip');
        $pegawai->nup = request('nup');
        $pegawai->nik_ktp = request('nik_ktp');
        $pegawai->nama = request('nama');
        $pegawai->username = request('username');
        $pegawai->confirmasi_password = request('confirmasi_password');
        $pegawai->password = request('confirmasi_password');
        $pegawai->id_unit = request('id_unit');
        $pegawai->gelar_depan= request('gelar_depan');
        $pegawai->gelar_belakang = request('gelar_belakang');
        $pegawai->tempat_lahir = request('tempat_lahir');
        $pegawai->tanggal_lahir = request('tanggal_lahir');
        $pegawai->jenis_kelamin = request('jenis_kelamin');
        $pegawai->agama = request('agama');
      
        $pegawai->handleUploadFoto();
        $pegawai->save();

        return redirect('pegawai')->with('success', 'Data Berhasil Diedit');
    }
    function destroy(Pegawai $pegawai)
    {
        $pegawai->delete();
        return redirect('pegawai')->with('danger', 'Data Berhasil Dihapus');
    }
}
