<?php
namespace Database\Factories;

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Models\Product;
use Faker\Generator as Faker;
use Illuminate\Database\Eloquent\Factories\Factory;

class ProductFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Product::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    { 
    return [
        'code'=>$this->faker->ean8,
        'name'=>$this->faker->streetName,
        'slug' => $this->faker->unique()->slug,
        'stock' => $this->faker->buildingNumber,
        'short_description' => $this->faker->realText($maxNbChars = 300, $indexSize = 2),
        'long_description' => $this->faker->sentence($nbWords = 6, $variableNbWords = true),
        'sell_price' => $this->faker->randomNumber(2),
        'status' =>'ACTIVE',
        'category_id' => rand(1, 10),
        'subcategory_id' =>rand(1,10),
    ];
}
}
