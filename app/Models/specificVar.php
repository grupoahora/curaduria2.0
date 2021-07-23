<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class specificVar extends Model
{
    use HasFactory;

    protected  $fillable = [
        'name', 'transact_id', 'varc1', 'varc2', 'varc3', 'varc4', 'varc5', 'varc6', 'varc7', 'varc8', 'varc9', 'varc10', 'varc11', 'varc12',
    ]; 

    // relacion uno a uno


    public function Transacts(){
        return $this->belongsTo('App\Models\transact');
        
    }
}
