<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;



class Farm extends Model
{
    use HasFactory;

    protected $fillable = ['name', 'ubicacion', 'updated_at', 'created_at'];

    //relacion 1 a muchos 

    public function Lots(){
        return $this->hasMany('App\Models\lot');
    }

    //Relacion Muchos a muchos 

    public function Users() {
        return $this->belongsToMany('App\Models\user');
    }
}
