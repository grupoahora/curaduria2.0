<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Sale extends Model
{
    use HasFactory;

    // relacion uno a uno inversa

    public function Folders() {
        return $this->belongsTo('App\Models\Folder');
    }
    

    public function Users() {
        return $this->belongsTo('App\Models\User');
    }
    public function Documents() {
        return $this->hasMany('App\Models\Document');
    }
    public function States() {
        return $this->hasMany('App\Models\State');
    }

    //relación uno a muchos
    public function DocSales() 
    {
        return $this->belongsTo('App\Models\DocSale');
    }
}
