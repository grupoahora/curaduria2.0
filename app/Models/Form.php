<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Form extends Model
{
    use HasFactory;

    protected  $fillable = [
        'id', 'name', 'url',
    ]; 

    /* relacion uno a muchos */
    public function Documents(){
        return $this->hasMany('App\Models\document');
    }


    //Relacion Muchos a muchos 
    public function Folders() {
        return $this->belongsToMany('App\Models\folder');
    }
}
