<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Blade extends Model
{
    use HasFactory;
    protected  $fillable = [
        'name', 'transact_id',
    ];
// relacion muchos a muchos
    public function Gnericvars(){
        return $this->belongsToMany(GenericVar::class);
    }
// relacion uno a muchos

    public function Transacts(){
        return $this->belongsTo('App\Models\Transact');
        
    }
}
