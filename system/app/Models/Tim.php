<?php

namespace App\Models;
use Illuminate\Support\Str;
use App\Models\Model;


class Tim extends Model
{   
    protected $table="tim";
    
    function handleUploadFoto()
    {
        if (request()->hasFile('foto')) {
            $foto = request()->file('foto');
            $destination = "tim";
            $randomStr = Str::random(5);
            $filename = time() . "-"  . $randomStr . "."  . $foto->extension();
            $url = $foto->storeAs($destination, $filename);
            $this->foto = "app/" . $url;

        }
    }

}
