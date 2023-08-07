<?php

namespace App\Models;
use Illuminate\Support\Str;
use App\Models\Model;

class Inventaris extends Model
{

    protected $table="inventaris";

    
    function handleUploadFoto()
    {
        if (request()->hasFile('Foto')) {
            $Foto = request()->file('Foto');
            $destination = "inventaris";
            $randomStr = Str::random(5);
            $filename = time() . "-"  . $randomStr . "."  . $Foto->extension();
            $url = $Foto->storeAs($destination, $filename);
            $this->Foto = "app/" . $url;

        }
    }

    function Ruangan(){
		return $this->belongsTo('\App\Models\Ruangan', 'id_ruangan');
	}

    function Unit(){
		return $this->belongsTo('\App\Models\Unit', 'id_unit');
	}

    
    function Kondisi(){
		return $this->belongsTo('\App\Models\Kondisi', 'id_kondisi');
	}



}
