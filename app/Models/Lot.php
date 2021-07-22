<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Lot extends Model
{
    use HasFactory;


    //relacion 1 a muchos inversa


    public function farm(){
        return $this->belongsTo('App\Models\farm');
    }
}
