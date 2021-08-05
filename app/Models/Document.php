<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Document extends Model
{
    use HasFactory;

    public function Sales(){
        return $this->hasMany('App\Models\sale');
    }



    //Relacion 1 a muchos inversa

    public function Users() {
        return $this->belongsTo('App\Models\user');
    }
    public function Forms() {
        return $this->belongsTo('App\Models\form');
    }
}   
