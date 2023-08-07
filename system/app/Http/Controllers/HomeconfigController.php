<?php

namespace App\Http\Controllers;
use App\Models\Homeconfig;
use App\Models\Profil_pimpinan;
use App\Models\User;

class HomeconfigController extends Controller
{
    
    public function index()
    {
        $data['list_homeconfig'] = Profil_pimpinan::all();
        $data['list_deskripsi'] = Homeconfig::all();
		$data['user'] = auth()->user();
        return view('admin.homeconfig.index', $data);
    } 

	function create_profil(){
		return view('admin.homeconfig.create');
	}

    public function store_profil(){

        $profil_pimpinan = New Profil_pimpinan;
    
        $profil_pimpinan->Nama = request('Nama');
        $profil_pimpinan->Jabatan = request('Jabatan');
        $profil_pimpinan->handleUploadFoto();
        $profil_pimpinan->save();

        return redirect('homeconfig')->with('success','Data Homeconfig Berhasil Ditambahkan');
    }
    
    function show_profil($id){
		$data['profil_pimpinan'] = Profil_pimpinan::find($id);
		$data['user'] = auth()->user();
		return view('admin.homeconfig.show', $data);
	}	
	function edit_profil($id){
		$data['profil_pimpinan'] = Profil_pimpinan::find($id);
		$data['user'] = auth()->user();
		return view('admin.homeconfig.edit', $data);

	}
	function update_profil($id){

        $profil_pimpinan = Profil_pimpinan::find($id);
       
        $profil_pimpinan->Nama = request('Nama');
        $profil_pimpinan->Jabatan = request('Jabatan');
        $profil_pimpinan->handleUploadFoto();
        $profil_pimpinan->save();
		
		return redirect('homeconfig')->with('success','Data Berhasil Diedit');

	}
	function destroy_profil($id){
        
		Profil_pimpinan::destroy($id);
		return redirect('homeconfig')->with('danger','Data Berhasil Dihapus');
	}   
    
     
	function create(){
		return view('admin.homeconfig.create');
	}

    public function store(){

        $homeconfig = New Homeconfig;
        $homeconfig->Nama = request('Nama');
        $homeconfig->Deskripsi = request('Deskripsi');
       $homeconfig->save();

        return redirect('homeconfig')->with('success','Data Homeconfig Berhasil Ditambahkan');
    }
    
    function show(Homeconfig $homeconfig){
		$data['homeconfig'] = $homeconfig;
		$data['user'] = auth()->user();
		return view('admin.homeconfig.showdeskripsi', $data);
	}
	function edit(Homeconfig $homeconfig){
		$data['homeconfig'] = $homeconfig;
		$data['user'] = auth()->user();
		return view('admin.homeconfig.editdeskripsi', $data);

	}
	function update(Homeconfig $homeconfig){
		
		$homeconfig = New Homeconfig;
        $homeconfig->Nama = request('Nama');
        $homeconfig->Deskripsi = request('Deskripsi');
        $homeconfig->save();
		
		return redirect('homeconfig')->with('success','Data Berhasil Diedit');

	}
	function destroy(Homeconfig $homeconfig){
		$homeconfig->delete();
		return redirect('homeconfig')->with('danger','Data Berhasil Dihapus');
	}
}
