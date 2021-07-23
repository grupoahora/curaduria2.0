<?php

namespace Database\Seeders;
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
        ])->assignRole('Admin');
        User::create([
            'name' => 'jesus david quitero caleño',
            'email' => 'jesusquintero@grupoahora.co',
            'password' => bcrypt('12345678')
        ])->assignRole('Cliente');

        User::factory(20)->create();
    }
}
