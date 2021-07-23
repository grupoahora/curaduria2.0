<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Transact extends Model
{
    use HasFactory;

    protected  $fillable = [
        'name_products', 'category_id',
    ]; 

    // relacion uno a uno

    public function Users(){
        return $this->belongsTo('App\Models\user');
        
    }

    public function Categories(){
        return $this->belongsTo('App\Models\category');
        
    }
}
