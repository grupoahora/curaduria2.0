<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Transact extends Model
{
    use HasFactory;

    protected $fillable = [
        'name_product', 'category_id' 
    ];


    // relacion uno a muchos inversa

    public function categories() {
        return $this->belongsTo('App\Models\category');
    }



}


