<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Str;

class Product extends Model
{
    use HasFactory;
    protected $fillable = [
        'code',
        'name',
        'slug',
        /* 'stock', */
        'short_description',
        'long_description',
        'sell_price',
        'status',
        'category_id',
        'subcategory_id',
        /* 'provider_id', */
    ];

    public function category(){
        return $this->belongsTo(Category::class);
    }
    public function provider(){
        return $this->belongsTo(Provider::class);
    }
    public function images()
    {
        return $this->morphMany('App\Models\Image', 'imageable');
    }
    public function tags()
    {
        return $this->belongsToMany(Tag::class);
    }
    public function colors()
    {
        return $this->belongsToMany(Color::class);
    }
    public function sizes()
    {
        return $this->belongsToMany(Size::class);
    }
    public function my_store($request)
    {
        $product = self::create([
            /* 'code' => $request->code, */
            'name' => $request->name,
            'slug' => Str::slug($request->slug, '_'),
            /* 'stock' => $request->stock, */
            'short_description' => $request->short_description,
            'long_description' => $request->long_description,
            'sell_price' => $request->sell_price,
            /* 'status' => $request->status, */
            'category_id' => $request->category_id,
            'subcategory_id' => $request->subcategory_id,
            /* 'provider_id' => $request->provider_id, */
        ]);
        $product->tags()->attach($request->get('tags'));
        $product->colors()->attach($request->get('colors'));
        $product->sizes()->attach($request->get('sizes'));
        $this->generate_code($product);
        $this->upload_files($request, $product);
    }
    public function my_update($request)
    {
        $this->update([
            'code' => $request->code,
            'name' => $request->name,
            'slug' => Str::slug($request->name, '_'),
            /* 'stock' => $request->stock, */
            'short_description' => $request->short_description,
            'long_description' => $request->long_description,
            'sell_price' => $request->sell_price,
            /* 'status' => $request->status, */
            'category_id' => $request->category_id,
            'subcategory_id' => $request->subcategory_id,
            /* 'provider_id' => $request->provider_id, */
        ]);
        $this->tags()->sync($request->get('tags'));
        $this->colors()->sync($request->get('colors'));
        $this->sizes()->sync($request->get('sizes'));
        
        $this->generate_code($this);
        
    }
    public function generate_code($product)
    {
        $numero = $product->id;
        $numeroConCeros = str_pad($numero, 8, "0", STR_PAD_LEFT);
        $product->update(['code' => $numeroConCeros]);
    }
    public function upload_files($request, $product)
    {
        $urlimages = [];
        if($request->hasFile('images')){
            $images = $request->file('images');
            foreach ($images as $image) {
                $nombre = time().$image->getClientOriginalName();
                $ruta = public_path().'/image';
                $image->move($ruta, $nombre);
                $urlimages[]['url']='/image/'.$nombre;
            
            }
        }
        $product->images()->createMany($urlimages);
    }




    static function get_active_products()
    {
        return self::where('status', 'ACTIVE');
    }
    public function status(){
        switch ($this->status) {
            case 'ACTIVE':
                return 'Activo';
            case 'DEACTIVATED':
                return 'Inactivo';
            default:
                # code...
                break;
        }
    }
}
