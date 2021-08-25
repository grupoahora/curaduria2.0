<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Sale extends Model
{
    use HasFactory;

    // relacion uno a uno inversa

    protected $fillable = [
        'id','user_id', 'folder_id', 'namefolder', 'created_at', 'updated_at'
    ];
    
    public function Folder() {
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
    public function Docsales() 
    {
        return $this->hasMany('App\Models\Docsale');
    }
}
