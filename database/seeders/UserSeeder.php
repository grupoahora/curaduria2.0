<?php

namespace Database\Seeders;

use App\Models\Category;
use App\Models\Transact;
use App\Models\User;
use Illuminate\Database\Seeder;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        User::create([
            'name' => 'kevin andres patiño',
            'email' => 'andrespatino@grupoahora.co',
            'password' => bcrypt('12345678')
        ])->assignRole('Admin', 'Cliente');
        User::create([
            'name' => 'David Cortés Miranda',
            'email' => 'cortesmirandaedavid19@gmail.com',
            'password' => bcrypt('12345678')
        ])->assignRole('Admin', 'Cliente');
        
        User::factory(20)->create();

        

        
    }
}
