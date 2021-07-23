<?php

namespace Database\Seeders;

use App\Models\Blade;
use App\Models\specificVar;
use App\Models\Transact;

use Illuminate\Database\Seeder;

class TransactSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $transact = Transact::factory(3)->create();
        foreach ($transact as $transacts) {

            specificVar::factory(1)->create();
            Blade::factory(1)->create();

        };
    }
}
