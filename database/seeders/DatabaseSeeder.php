<?php
namespace Database\Seeders;

use App\Models\Category;
use App\Models\Color;
use App\Models\Image;
use App\Models\Product;
use App\Models\Size;
use App\Models\Subcategory;
use App\Models\Tag;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $this->call(CurrencySeeder::class);
        $this->call(PaymentPlatformSeeder::class);
        // $this->call(UsersTableSeeder::class);
        $this->call(RoleSeeder::class);
        $this->call(UsersTableSeeder::class);

        $this->call(BusinessTableSeeder::class);
        $this->call(PrinterTableSeeder::class);
        $this->call(ColorSeeder::class);
        $this->call(SizeSeeder::class);
        $this->call(TagSeeder::class);
        Category::factory(10)->create()->each(function ($category) {
            $category->images()->saveMany(Image::factory(1)->make());
        });
        Subcategory::factory(50)->create();
        Product::factory(24)->create()->each(function($product){
            $product->images()->saveMany(Image::factory(4)->make());
        });
        /* factory(App\Client::class, 10)->create(); */
        
        
        
        
    }
}
