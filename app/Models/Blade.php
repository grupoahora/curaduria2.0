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

    public function Gnericvars(){
        return $this->belongsToMany(GenericVar::class);
    }

    public function Transacts(){
        return $this->belongsTo('App\Models\Transact');
        
    }
}
