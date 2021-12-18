<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Profile extends Model
{
    use HasFactory;
    protected $fillable = [
        'user_id',
        'dni',
        'ruc',
        'address',
        'phone',
    ];
    public function Sales()
    {
        return $this->hasMany(Sale::class);
    }
}
