<?php

namespace Database\Seeders;

use App\Models\Blade;
use App\Models\GenericVar;
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
        Transact::factory(3)->create();
        
            
                
                
            


        
    }
}
