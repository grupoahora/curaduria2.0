<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Role;
use Spatie\Permission\Models\Permission;

class RoleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $role1 = Role::create(['name' => 'Admin']);
        $role2 = Role::create(['name' => 'Agricultor']);
        
        Permission::create(['name' => 'admin.home',
                            'description' => 'ver panel de control administrativo'])->assignRole($role1);
        Permission::create(['name' => 'agricultor.home',
                            'description' => 'Ver panel de control de agricultor'])->SyncRoles($role1, $role2);

        Permission::create(['name' => 'admin.users.index',
                            'description' => 'ver usuarios'])->assignRole($role1);
        Permission::create(['name' => 'admin.users.edit',
                            'description' => 'Asignar un rol'])->assignRole($role1);
        Permission::create(['name' => 'admin.roles.index',
                            'description' => 'ver roles'])->assignRole($role1);
    }
}
