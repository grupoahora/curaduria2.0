<?php

namespace Database\Factories;

use App\Models\Category;
use Illuminate\Database\Eloquent\Factories\Factory;
use App\Models\Transact;
use App\Models\User;

class TransactFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Transact::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'name_products' => $this->faker->name(),
            
            'category_id' => Category::all()->random()->id,
            'user_id' => User::all()->random()->id,
            
            
        ];
    }
}
