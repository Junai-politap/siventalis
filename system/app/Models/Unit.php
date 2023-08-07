<?php

namespace App\Models;
use Illuminate\Support\Str;
use App\Models\Model;


class Unit extends Model
{

    protected $table="unit";
    
  function Inventaris(){
		return $this->belongsTo('\App\Models\Inventaris', 'id');
	}

  function Ruangan(){
		return $this->belongsTo('\App\Models\Ruangan', 'id');
	}
  
  function Pegawai(){
		return $this->belongsTo('\App\Models\Pegawai', 'id');
	}

}
