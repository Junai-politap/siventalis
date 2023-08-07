<?php

namespace App\Http\Controllers;
use Auth;
use App\Models\User;
use Illuminate\Http\Request;

class SuperAdminController extends Controller
{
    public function index()
    {
        $data['list_admin'] = User::all();
        $data['user'] = auth()->user();

        return view('admin.super-admin.index',$data);
    }
 
    public function store(Request $req)
    {
        $user = New User;
        $user->nama = request('nama');
        $user->username = request('username');
        $user->confirmasi_password = request('confirmasi_password');
        $user->password = request('confirmasi_password');

        if($req->hasFile('foto')){
            $filename = $user->username.".".$req->foto->getClientOriginalExtension();
            $req->foto->move('public/app/admin'. $filename);
            $user->foto = $filename;
            $user->save();
        }
        return redirect('admin');
    }

    function edit(User $user){
		$data['Admin'] = $user;
        $data['user'] = auth()->user();
		return view('admin.super-admin.edit', $data);

	}
	function update(User $user,$req){
        $user->nama = request('nama');
        $user->username = request('username');
        $user->confirmasi_password = request('confirmasi_password');
        $user->password = request('confirmasi_password');
        if($req->hasFile('foto')){
            $filename = $user->username.".".$req->foto->getClientOriginalExtension();
            $req->foto->move('public/app/admin'. $filename);
            $user->foto = $filename;
            $user->save();
        }

		return redirect('admin')->with('success','Data Berhasil Diedit');
    }

    function destroy(User $user){
		$user->delete();
		return redirect('admin')->with('danger','Data Berhasil Dihapus');
	}

}
