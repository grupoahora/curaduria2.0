<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Proceeding extends Model
{
    use HasFactory;
    protected $guarded = [];
    public function archives()
    {
        return $this->morphMany('App\Models\Archive', 'archiveable');
    }
}
