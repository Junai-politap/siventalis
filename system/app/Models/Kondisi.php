<?php

namespace App\Models;
use Illuminate\Support\Str;
use App\Models\Model;


class Kondisi extends Model
{   
    protected $table="kondisi";

    function Inventaris(){
		return $this->belongsTo('\App\Models\Inventaris', 'id');
	}

}
