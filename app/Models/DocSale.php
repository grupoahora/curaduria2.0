<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class DocSale extends Model
{
    use HasFactory;

    //relación uno a muchos inversa

    public function Sale() {
        return $this->hasMany('App\Models\Sale');
    }
}
