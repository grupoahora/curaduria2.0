<?php

namespace Database\Factories;

use App\Models\Blade;
use Illuminate\Database\Eloquent\Factories\Factory;
use App\Models\GenericVar;

class GenericVarFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = GenericVar::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            
            'vart1' => $this->faker->sentence(),
            'vart2' => $this->faker->sentence(),
            'vara1' => $this->faker->sentence(),
            'vara3' => $this->faker->sentence(),
            'vara4' => $this->faker->sentence(),
            'vara5' => $this->faker->sentence(),
            'vara6' => $this->faker->sentence(),
            'vara7' => $this->faker->sentence(),
            'varc1' => $this->faker->sentence(),
            'varc2' => $this->faker->text(),
            'varc3' => $this->faker->sentence(),
            'varc4' => $this->faker->sentence(),
            'varc5' => $this->faker->paragraph(),
            'varc6' => $this->faker->sentence(),
            'varc7' => $this->faker->paragraph(),
            'varc8' => $this->faker->paragraph(),
            'varc9' => $this->faker->sentence(),
            'varc10' => $this->faker->sentence(),
            'varc11' => $this->faker->sentence(),
            'varc12' => $this->faker->sentence(),
            'varc13' => $this->faker->sentence(),
            

            'blade_id' => Blade::all()->random()->id,
        ];
    }
}
