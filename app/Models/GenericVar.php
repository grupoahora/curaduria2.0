<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class GenericVar extends Model
{
    use HasFactory;

    protected  $fillable = [
         'blade_id', 'vart1', 'vart2', 'vara1',  'vara3', 'vara4', 'vara5', 'vara6', 'vara7', 'varc1', 'varc2',  'varc3', 'varc4', 'varc5', 'varc6', 'varc7', 'varc8', 'varc9', 'varc10', 'varc11', 'varc12', 'varc13',
    ]; 

    /*public function Blades(){
        return $this->belongsTo('App\Models\blade');
        
    }*/
    // relacion mucho a muchos

    public function Blades(){
        return $this->belongsToMany(Blade::class);
    }
}
