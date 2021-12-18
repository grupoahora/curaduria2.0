<?php
namespace Database\Factories;

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Models\Size;
use App\Models\Subcategory;
use Faker\Generator as Faker;
use Illuminate\Database\Eloquent\Factories\Factory;

class SubcategoryFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Subcategory::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
    return [
        'category_id' => rand(1, 10),
        'name' => $this->faker->unique()->word,
        'slug' => $this->faker->unique()->slug,
        'description' => $this->faker->sentence($nbWords = 6, $variableNbWords = true),
    ];
}
}
