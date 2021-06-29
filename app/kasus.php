<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class kasus extends Model
{
     public $timestamps = false;
    protected $fillable = [

        'kode_kasus' , 'nama_kasus', 'poin'
        
         ];
}
