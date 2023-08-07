<?php

namespace App\Http\Controllers;

use App\Models\Inventaris;
use App\Models\Pegawai;
use App\Models\Ruangan;
use App\Models\Unit;
use App\Models\User;
use App\Models\Kondisi;

class InventarispegawaiController extends Controller
{
    public function indexpegawai()
    {
        $data['list_inventaris'] = Inventaris::orderBy('id', 'ASC')->take(1)->get();
        $data['data_inventaris'] = Inventaris::all();

        $data['list_ruangan'] = Ruangan::orderBy('id', 'ASC')->take(1)->get();
        $data['data_ruangan'] = Ruangan::all();


        $data['list_unit'] = Unit::all();
        $data['list_pegawai'] = Pegawai::all();
        $data['dt_ruangan'] = Ruangan::all();

        $data['pegawai'] = auth()->guard('pegawai')->user();
        return view('adminpegawai.inventaris.index', $data);
    }


    function createpegawai()
    {
        return view('adminpegawai.inventaris.create');
    }



    public function storepegawai()
    {

        $inventaris = new Inventaris;
        $inventaris->kode_barang = request('kode_barang');

        $inventaris->Nama_Barang = request('Nama_Barang');
        $inventaris->Spesifikasi = request('Spesifikasi');
        $inventaris->kepemilikan = request('kepemilikan');
        $inventaris->Tahun_Pengadaan = request('Tahun_Pengadaan');
        $inventaris->id_kondisi = request('id_kondisi');
        $inventaris->id_ruangan = request('id_ruangan');
        $inventaris->jumlah = request('jumlah');
        $inventaris->no_bmn = request('no_bmn');
        $inventaris->id_unit = request('id_unit');
        $inventaris->handleUploadFoto();
        $inventaris->save();

        return back()->with('success', 'Data Inventaris  Berhasil Ditambahkan');
    }

    function showpegawai(Ruangan $ruangan)
    {
        $data['pegawai'] = auth()->guard('pegawai')->user();
        $data['ruangan'] = $ruangan;
        $data['list_inventaris'] = Inventaris::all();
        $data['list_ruangan'] = Ruangan::all();
        $data['list_kondisi'] = Kondisi::all();
        return view('adminpegawai.inventaris.show', $data);
    }

    function showpegawaiinventaris(Inventaris $inventaris)
    {
        $data['pegawai'] = auth()->guard('pegawai')->user();
        $data['inventaris'] = $inventaris;
        $data['list_ruangan'] = Ruangan::all();
        $data['list_kondisi'] = Kondisi::all();
        return view('adminpegawai.inventaris.detail', $data);
    }


    function editpegawai(Inventaris $inventaris)
    {
        $data['pegawai'] = auth()->guard('pegawai')->user();
        $data['inventaris'] = $inventaris;
        $data['list_unit'] = Unit::all();
        $data['list_ruangan'] = Ruangan::all();
        $data['list_kondisi'] = Kondisi::all();
        return view('adminpegawai.inventaris.edit', $data);
    }
    public function updatepegawai($id)
    {
        $inventaris = Inventaris::find($id);
        $inventaris->kode_barang = request('kode_barang');

        $inventaris->Nama_Barang = request('Nama_Barang');
        $inventaris->Spesifikasi = request('Spesifikasi');
        $inventaris->kepemilikan = request('kepemilikan');
        $inventaris->Tahun_Pengadaan = request('Tahun_Pengadaan');
        $inventaris->id_kondisi = request('id_kondisi');
        $inventaris->id_ruangan = request('id_ruangan');
        $inventaris->id_unit = request('id_unit');
        $inventaris->jumlah = request('jumlah');
        $inventaris->no_bmn = request('no_bmn');
        $inventaris->handleUploadFoto();
        $inventaris->save();

        return redirect('inventarispegawai')->with('success', 'Data Berhasil Diedit');
    }
    function destroypegawai(Inventaris $inventaris)
    {
        $inventaris->delete();
        return redirect('inventarispegawai')->with('danger', 'Data Berhasil Dihapus');
    }
}
