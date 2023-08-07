<?php

namespace App\Models;
use Illuminate\Support\Str;
use App\Models\Model;

class Ruangan extends Model
{

    protected $table="ruangan";
    
    function Inventaris(){
		return $this->belongsTo('\App\Models\Inventaris', 'id');
	}

    function Pegawai(){
		return $this->belongsTo('\App\Models\Pegawai', 'id_pegawai');
	}

    function Unit(){
		return $this->belongsTo('\App\Models\Unit', 'id_unit');
	}


   function handleUploadFotoRuangan()
    {
        if (request()->hasFile('foto')) {
            $foto = request()->file('foto');
            $destination = "ruangan";
            $randomStr = Str::random(5);
            $filename = time() . "-"  . $randomStr . "."  . $foto->extension();
            $url = $foto->storeAs($destination, $filename);
            $this->foto = "app/" . $url;

        }
    }
}
