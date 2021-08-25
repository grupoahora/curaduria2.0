<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Docsale extends Model
{
    use HasFactory;

    //relación uno a muchos inversa

    public function Sale() {
        return $this->belongsTo('App\Models\Sale');
    }
}
