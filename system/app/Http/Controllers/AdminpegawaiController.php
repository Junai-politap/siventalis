<?php

namespace App\Http\Controllers;

use App\Models\User;
use Auth;
use App\Models\Pegawai;
use App\Models\Unit;
use App\Models\Inventaris;


class AdminpegawaiController extends Controller
{
    public function index()
    {
        
        $data['inventaris'] = Inventaris::orderBY('id', 'DESC')->count();
        $data['bmn'] = Inventaris::where('kepemilikan', 'BMN')->count();
        $data['rusak'] = Inventaris::where('id_kondisi', '96bacab6-0db4-4f0a-a1cd-8b5e15f33db1')->count();
        $data['baik'] = Inventaris::where('id_kondisi', '96baca9f-2652-4668-b2cc-82f5f0c312a7')->count();
        $data['pegawai'] = auth()->guard('pegawai')->user();
        
        return view('adminpegawai.index', $data);
    }

    public function profil()
    {
        $data['list_unit'] = Unit::all();
        $data['pegawai'] = auth()->guard('pegawai')->user();
        return view('adminpegawai.profil.index', $data);
    }

    function editprofil(Pegawai $pegawai)
    {
        $data['list_unit'] = Unit::all();
        $data['pegawai'] = auth()->guard('pegawai')->user();
        $data['pegawai'] = $pegawai;
        return view('adminpegawai.profil.edit', $data);
    }

    function updateprofil(Pegawai $pegawai)
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

        return redirect('profil')->with('success', 'Data Berhasil Diedit');
    }
}
