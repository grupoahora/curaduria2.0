<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use App\Models\specificVar;
use App\Models\Transact;

class SpecificVarFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = specificVar::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'name' => $this->faker->name(),
            'varc1' => $this->faker->sentence(),
            'varc1' => $this->faker->sentence(),
            'varc2' => $this->faker->sentence(),
            'varc3' => $this->faker->sentence(),
            'varc4' => $this->faker->sentence(),
            'varc5' => $this->faker->sentence(),
            'varc6' => $this->faker->sentence(),
            'varc7' => $this->faker->sentence(),
            'varc8' => $this->faker->sentence(),
            'varc9' => $this->faker->sentence(),
            'varc10' => $this->faker->sentence(),
            'varc11' => $this->faker->sentence(),
            'varc12' => $this->faker->sentence(),
            
            'transact_id' => Transact::all()->random()->id,
            
        ];
    }
}
