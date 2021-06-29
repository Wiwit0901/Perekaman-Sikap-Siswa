<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class kejadian extends Model
{
    public $timestamps = false;
    protected $fillable = [

       'kode_kejadian', 'nama', 'nis', 'kode_kasus' , 'nama_kasus', 'poin', 'tanggal', 'saksi' 

    ];
}
