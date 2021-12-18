<?php
namespace Database\Seeders;

use App\Models\Product;
use Illuminate\Database\Seeder;
use App\Models\tag;
class ProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $products = Product::factory(10)->create();
        
        foreach ($products as $product){
            $product->tags()->sync([1,10]);
        }
    }
}
/* $this->tags()->sync($request->get('tags')); */