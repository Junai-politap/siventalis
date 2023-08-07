<?php

namespace App\Http\Controllers;
use App\Models\Homeconfig;
use App\Models\Profil_pimpinan;
use App\Models\Unit;
use App\Models\Ruangan;
use App\Models\Inventaris;
use App\Models\Tim;
use App\Models\Foto;


class HomeController extends Controller
{
   

    public function index()
    {
        $data['list_homeconfig'] = Profil_pimpinan::all();
        $data['list_deskripsi'] = Homeconfig::all();
        $data['list_unit'] = Unit::all();
        $data['list_foto'] = Foto::all();
        return view('home.index', $data);
    }

	function profil(){

        $data['list_homeconfig'] = Profil_pimpinan::all();
        $data['list_unit'] = Unit::all();
		return view('home.profil', $data);
	}

    function tim(){

        $data['list_tim'] = Tim::all();
        $data['list_unit'] = Unit::all();
		return view('home.tim', $data);
	}
    
    public function show($id)
    {
        $data['list_unit'] = Unit::all();
        $data['list_ruangan'] = Ruangan::all();
        $data['unit'] = Unit::find($id);

        Return view('home.show', $data);

    }

    public function showinventaris($id)
    {
        $data['list_unit'] = Unit::all();
        $data['list_inventaris'] = Inventaris::orderBy('kode_barang', 'ASC')->get();
        $data['ruangan'] = Ruangan::find($id);

        Return view('home.showinventaris', $data);

    }


}
