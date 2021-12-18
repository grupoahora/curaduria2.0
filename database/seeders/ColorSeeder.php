<?php
namespace Database\Seeders;

use App\Models\Color;
use App\Models\Tag;
use Illuminate\Database\Seeder;

class ColorSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Color::factory(10)->create();
    }
}
