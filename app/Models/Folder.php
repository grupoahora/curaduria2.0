<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Folder extends Model
{
    use HasFactory;

    protected $guarded = ['id', 'created_at' , 'updated_at']; 

    // relacion uno a uno

    public function Specificvars() {
        return $this->hasMany('App\Models\specificVar');
    }

    
    //relacion uno a muchos inversa
    public function User(){
        return $this->belongsTo('App\Models\user');
        
    }
    // relacion uno a muchos inversa

    public function Category(){
        return $this->belongsTo('App\Models\category');
        
        
    }
    public function Sales(){
        return $this->hasMany('App\Models\sale');
    }
    //Relacion Muchos a muchos 

    public function Forms() {
        return $this->belongsToMany('App\Models\form');
    }
}
