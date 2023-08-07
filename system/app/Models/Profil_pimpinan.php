<?php

namespace App\Models;
use Illuminate\Support\Str;
use App\Models\Model;


class Profil_pimpinan extends Model
{   
    protected $table="profil_pimpinan";
   
    function handleUploadFoto()
    {
        if (request()->hasFile('Foto')) {
            $Foto = request()->file('Foto');
            $destination = "profil_pimpinan";
            $randomStr = Str::random(5);
            $filename = time() . "-"  . $randomStr . "."  . $Foto->extension();
            $url = $Foto->storeAs($destination, $filename);
            $this->Foto = "app/" . $url;
            $this->save();
        }
    }

    function Pegawai(){
		return $this->belongsTo('\App\Models\Pegawai', 'NIP');
	}
}
