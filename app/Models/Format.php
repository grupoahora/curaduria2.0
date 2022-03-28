<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Format extends Model
{
    use HasFactory;
    protected $guarded = [];
    public function images()
    {
        return $this->morphMany('App\Models\Image', 'imageable');
    }
    public function archives()
    {
        return $this->morphMany('App\Models\Archive', 'archiveable');
    }
    public function upload_files($request, $product)
    {
        $urlimages = [];
        if ($request->hasFile('images')) {
            $images = $request->file('images')->size('2500');
            foreach ($images as $image) {
                $nombre = time() . $image->getClientOriginalName();
                $ruta = public_path() . '/image';
                $image->move($ruta, $nombre);
                $urlimages[]['url'] = '/image/' . $nombre;
            }
        }
        $product->images()->createMany($urlimages);
    }
}
