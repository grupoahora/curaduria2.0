<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    use HasFactory;

    protected  $fillable = [
        'id', 'categoryr', 'categoryu', 
    ]; 

    // relacion uno a uno inversa

    public function Transacts() {
        return $this->hasMany('App\Models\Transact');
    }
}
