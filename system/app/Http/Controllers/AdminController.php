<?php

namespace App\Http\Controllers;
use App\Models\User;
use Auth;
use App\Models\Inventaris;

class AdminController extends Controller
{
    public function index()
    {
        $data['user'] = auth()->user();

        $data['inventaris'] = Inventaris::orderBY('id', 'DESC')->count();
        $data['bmn'] = Inventaris::where('kepemilikan', 'BMN')->count();
        $data['rusak'] = Inventaris::where('id_kondisi', '96bacab6-0db4-4f0a-a1cd-8b5e15f33db1')->count();
        $data['baik'] = Inventaris::where('id_kondisi', '96baca9f-2652-4668-b2cc-82f5f0c312a7')->count();
        return view('admin.index', $data);
    }
}
