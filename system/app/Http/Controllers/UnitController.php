<?php

namespace App\Http\Controllers;

use App\Models\Unit;
use Illuminate\Http\Request;
use App\Models\User;

class UnitController extends Controller
{

  public function index()
  {
    $data['list_unit'] = Unit::all();
    $data['user'] = auth()->user();
    return view('admin.unit.index', $data);
  }


  public function store(Request $request)
  {
    $unit = new Unit;
    $unit->nama_unit = request('nama_unit');
    $unit->save();
    return redirect('unit');
  }

  function edit(unit $unit)
  {
    $data['unit'] = $unit;
    $data['user'] = auth()->user();
    return view('admin.unit.edit', $data);
  }

  function show(Unit $unit)
  {
    $data['unit'] = $unit;
    $data['user'] = auth()->user();
    return view('admin.unit.show', $data);
  }

  function update(Unit $unit)
  {
  
    $unit->nama_unit = request('nama_unit');
    $unit->save();

    return redirect('unit')->with('success', 'Data Berhasil Diedit');
  }

  function destroy(unit $unit)
  {
    $unit->delete();
    return redirect('unit')->with('danger', 'Data Berhasil Dihapus');
  }
}
