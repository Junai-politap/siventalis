<?php

namespace App\Http\Controllers;

use App\Models\Kondisi;
use Illuminate\Http\Request;
use App\Models\User;

class KondisiController extends Controller
{

    public function index()
    {
        $data['list_kondisi'] = Kondisi::all();
        $data['user'] = auth()->user();
        return view('admin.kondisi.index', $data);
    }


    public function store(Request $request)
    {
        $kondisi = New Kondisi;
        $kondisi->kondisi = request('kondisi');
        $kondisi->save();
        return redirect('kondisi');
    }


    function destroy(Kondisi $kondisi){
		$kondisi->delete();
		return redirect('kondisi')->with('danger','Data Berhasil Dihapus');
	}
}
