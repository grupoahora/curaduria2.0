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
        $role2 = Role::create(['name' => 'Notario']);
        /* $role2 = ContractsRole::create(['name' => 'Admin2',
                                'name'=>'admin',
                                'special'=>'all-access']); */
        //Users
        Permission::create([
            'name'          => 'admin.home.index',
            'description'   => 'index del sistema',
            'view' => 'Usuarios',
        ])->assignRole($role1);

        Permission::create([
            'name'          => 'admin.users.index',
            'description'   => 'Lista y navega todos los usuarios del sistema',
            'view' => 'Usuarios',
        ])->assignRole($role1);

        Permission::create([
            'name'          => 'admin.users.create',
            'description'   => 'Podría crear nuevos usuarios en el sistema',
            'view' => 'Usuarios',
        ])->assignRole($role1);

        Permission::create([
            'name'          => 'admin.users.show',
            'description'   => 'Ve en detalle cada usuario del sistema',
            'view' => 'Usuarios',            
        ])->assignRole($role1);
        
        Permission::create([
            'name'          => 'admin.users.edit',
            'description'   => 'Podría editar cualquier dato de un usuario del sistema',
            'view' => 'Usuarios',
        ])->assignRole($role1);
        
        Permission::create([
            'name'          => 'admin.users.destroy',
            'description'   => 'Podría eliminar cualquier usuario del sistema',
            'view' => 'Usuarios',      
        ])->assignRole($role1);

        /* FORMATOS */

        Permission::create([
            'name'          => 'formats.index',
            'description'   => 'Lista y navega todos los formatos',
            'view' => 'Formatos',
        ])->assignRole($role1);

        Permission::create([
            'name'          => 'formats.create',
            'description'   => 'Podría crear nuevos formatos',
            'view' => 'Formatos',
        ])->assignRole($role1);

        Permission::create([
            'name'          => 'formats.show',
            'description'   => 'Ve en detalle cada formato',
            'view' => 'Formatos',            
        ])->assignRole($role1);
        
        Permission::create([
            'name'          => 'formats.edit',
            'description'   => 'Podría editar cualquier formato',
            'view' => 'Formatos',
        ])->assignRole($role1);
        
        Permission::create([
            'name'          => 'formats.destroy',
            'description'   => 'Podría eliminar cualquier formato',
            'view' => 'Formatos',      
        ])->assignRole($role1);

        

        /* RUTAS PARA PROCEDIMIENTOS */
        Permission::create([
            'name'          => 'proceedings.index',
            'description'   => 'Lista y navega todos los procedimientos',
            'view' => 'Procedimientos',
        ])->assignRole($role1);

        Permission::create([
            'name'          => 'proceedings.create',
            'description'   => 'Podría crear nuevos procedimientos',
            'view' => 'Procedimientos',
        ])->assignRole($role1);

        Permission::create([
            'name'          => 'proceedings.show',
            'description'   => 'Ve en detalle cada procedimiento',
            'view' => 'Procedimientos',
        ])->assignRole($role1);

        Permission::create([
            'name'          => 'proceedings.edit',
            'description'   => 'Podría editar cualquier procedimiento',
            'view' => 'Procedimientos',
        ])->assignRole($role1);

        Permission::create([
            'name'          => 'proceedings.destroy',
            'description'   => 'Podría eliminar cualquier procedimiento',
            'view' => 'Procedimientos',
        ])->assignRole($role1);

        


        //Roles
        Permission::create([
            'name'          => 'admin.roles.index',
            'description'   => 'Lista y navega todos los roles del sistema',
            'view' => 'Usuarios',
        ])->assignRole($role1);

        Permission::create([
            'name'          => 'admin.roles.show',
            'description'   => 'Ve en detalle cada rol del sistema',
            'view' => 'Usuarios',            
        ])->assignRole($role1);
        
        Permission::create([
            'name'          => 'admin.roles.create',
            'description'   => 'Podría crear nuevos roles en el sistema',
            'view' => 'Usuarios',
        ])->assignRole($role1);
        
        Permission::create([
            'name'          => 'admin.roles.edit',
            'description'   => 'Podría editar cualquier dato de un rol del sistema',
            'view' => 'Usuarios',
        ])->assignRole($role1);
        
        Permission::create([
            'name'          => 'admin.roles.destroy',
            'description'   => 'Podría eliminar cualquier rol del sistema',
            'view' => 'Usuarios',      
        ])->assignRole($role1);

        /* RUTAS PARA CATEGORIAS */
        Permission::create([
            'name'=>'categories.index',
            'description'=>'Lista y navega por todos los categorías del sistema.',
            'view' => 'Categorias',
        ])->assignRole($role1);
        Permission::create([
            'name'=>'categories.show',
            'description'=>'Ver en detalle cada categoría del sistema.',
            'view' => 'Categorias',
        ])->assignRole($role1);
        Permission::create([
            'name'=>'categories.edit',
            'description'=>'Editar cualquier dato de un categoría del sistema.',
            'view' => 'Categorias',
        ])->assignRole($role1);
        Permission::create([
            'name'=>'categories.create',
            'description'=>'Crea cualquier dato de una categoría del sistema.',
            'view' => 'Categorias',
        ])->assignRole($role1);
        Permission::create([
            'name'=>'categories.destroy',
            'description'=>'Eliminar cualquier dato de una categoría del sistema.',
            'view' => 'Categorias',
        ])->assignRole($role1);

        /* RUTAS PARA POSTS */
        Permission::create([
            'name' => 'posts.index',
            'description' => 'Lista y navega por todos los posts',
            'view' => 'Posts',
        ])->assignRole($role1);
        Permission::create([
            'name' => 'posts.show',
            'description' => 'Ver en detalle cada post.',
            'view' => 'Posts',
        ])->assignRole($role1);
        Permission::create([
            'name' => 'posts.edit',
            'description' => 'Editar cualquier dato de un post.',
            'view' => 'Posts',
        ])->assignRole($role1);
        Permission::create([
            'name' => 'posts.create',
            'description' => 'Crea un post.',
            'view' => 'Posts',
        ])->assignRole($role1);
        Permission::create([
            'name' => 'posts.destroy',
            'description' => 'Eliminar cualquier post.',
            'view' => 'Posts',
        ])->assignRole($role1);

        /* RUTAS PARA SUBIR ARCHIVOS */

        Permission::create([
            'name'          => 'file.delete',
            'description'   => 'Podría eliminar archivos de un formato',
            'view' => 'Formatos',
        ])->assignRole($role1, $role2);

        Permission::create([
            'name'          => 'file.delete.archive',
            'description'   => 'Podría eliminar el formato con sus archivos',
            'view' => 'Formatos',
        ])->assignRole($role1, $role2);

        Permission::create([
            'name'          => 'upload.archive',
            'description'   => 'Podría subir archivos de un formato',
            'view' => 'Formatos',
        ])->assignRole($role1, $role2);

        Permission::create([
            'name'          => 'upload.archive.pr',
            'description'   => 'Podría subir archivos de un procedimiento',
            'view' => 'Formatos',
        ])->assignRole($role1, $role2);

        Permission::create([
            'name'          => 'upload.image',
            'description'   => 'Podría eliminar el formato con sus archivos',
            'view' => 'Formatos',
        ])->assignRole($role1, $role2);

        Permission::create([
            'name'          => 'file.delete.archive.pr',
            'description'   => 'Podría eliminar el formato con sus archivos de un procedimiento',
            'view' => 'Formatos',
        ])->assignRole($role1, $role2);
        

    }
}
