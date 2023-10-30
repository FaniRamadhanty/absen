<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Hadir extends Model
{ 
    public function Absen()
    {
        
        return $this->hasMany('App\Models\Absen','id_hadir','id');
    }
    
    public function Pegawai()
    {
        return $this->belongsTo('App\Models\Pegawai','id_pekerja','id');
    }

    
    use HasFactory;
}
