<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class teacher extends Model
{
    public $timestamps = false;
    protected $fillable = [

        'nama', 'jk' , 'rayon' 

    ];
}
