<?php

namespace App\Models;
use Illuminate\Support\Str;
use App\Models\ModelAuthenticate;
use App\Models\Model;


class Pegawai extends ModelAuthenticate
{

    protected $table="pegawai";
   
    function handleUploadFoto()
    {
        if (request()->hasFile('foto')) {
            $Foto = request()->file('foto');
            $destination = "pegawai";
            $randomStr = Str::random(5);
            $filename = time() . "-"  . $randomStr . "."  . $Foto->extension();
            $url = $Foto->storeAs($destination, $filename);
            $this->Foto = "app/" . $url;

        }
    }

    public function setPasswordAttribute($value){

        $this->attributes['password'] = bcrypt($value);
    }


    function Ruangan(){
		return $this->belongsTo('\App\Models\Ruangan', 'id');
	}

    function Unit(){
		return $this->belongsTo('\App\Models\Unit', 'id_unit');
	}

   

}
