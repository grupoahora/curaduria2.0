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
        $role2 = Role::create(['name' => 'Cashier']);
        $role3 = Role::create(['name' => 'Cliente']);
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

        Permission::create([
            'name' => 'admin.subcategories.index',
            'description' => 'Lista y navega por todos los subcategorías del sistema.',
            'view' => 'Subcategorias',
        ])->assignRole($role1);
        Permission::create([
            'name' => 'admin.subcategories.show',
            'description' => 'Ver en detalle cada subcategoría del sistema.',
            'view' => 'Subcategorias',
        ])->assignRole($role1);
        Permission::create([
            'name' => 'admin.subcategories.edit',
            'description' => 'Editar cualquier dato de un subcategoría del sistema.',
            'view' => 'Subcategorias',
        ])->assignRole($role1);
        Permission::create([
            'name' => 'admin.subcategories.create',
            'description' => 'Crea cualquier dato de una subcategoría del sistema.',
            'view' => 'Subcategorias',
        ])->assignRole($role1);
        Permission::create([
            'name' => 'admin.subcategories.destroy',
            'description' => 'Eliminar cualquier dato de una subcategoría del sistema.',
            'view' => 'Subcategorias',
        ])->assignRole($role1);

        
        Permission::create([
            'name'=>'clients.index',
            'description'=>'Lista y navega por todos los clientes del sistema.',
            'view' => 'Clientes',
        ])->assignRole($role1);
        Permission::create([
            'name'=>'clients.show',
            'description'=>'Ver en detalle cada cliente del sistema.',
            'view' => 'Clientes',
        ])->assignRole($role1);
        Permission::create([
            'name'=>'clients.edit',
            'description'=>'Editar cualquier dato de un cliente del sistema.',
            'view' => 'Clientes',
        ])->assignRole($role1);
        Permission::create([
            'name'=>'clients.create',
            'description'=>'Crea cualquier dato de un cliente del sistema.',
            'view' => 'Clientes',
        ])->assignRole($role1);
        Permission::create([
            'name'=>'clients.destroy',
            'description'=>'Eliminar cualquier dato de un cliente del sistema.',
            'view' => 'Clientes',
        ])->assignRole($role1);

          

        Permission::create([
            'name'=>'products.index',
            'description'=>'Lista y navega por todos los productos del sistema.',
            'view' => 'Productos',
        ])->assignRole($role1);
        Permission::create([
            'name'=>'products.show',
            'description'=>'Ver en detalle cada producto del sistema.',
            'view' => 'Productos',
        ])->assignRole($role1);
        Permission::create([
            'name'=>'products.edit',
            'description'=>'Editar cualquier dato de un producto del sistema.',
            'view' => 'Productos',
        ])->assignRole($role1);
        Permission::create([
            'name'=>'products.create',
            'description'=>'Crea cualquier dato de un producto del sistema.',
            'view' => 'Productos',
        ])->assignRole($role1);
        Permission::create([
            'name'=>'products.destroy',
            'description'=>'Eliminar cualquier dato de un producto del sistema.',
            'view' => 'Productos',
        ])->assignRole($role1);
        Permission::create([
            'name' => 'change.status.products',
            'description' => 'Permite cambiar el estado de un producto.',
            'view' => 'Productos',
        ])->assignRole($role1);


           
        Permission::create([
            'name'=>'providers.index',
            'description'=>'Lista y navega por todos los proveedores del sistema.',
            'view' => 'Proveedores',
        ])->assignRole($role1);
        Permission::create([
            'name'=>'providers.show',
            'description'=>'Ver en detalle cada proveedor del sistema.',
            'view' => 'Proveedores',
        ])->assignRole($role1);
        Permission::create([
            'name'=>'providers.edit',
            'description'=>'Editar cualquier dato de un proveedor del sistema.',
            'view' => 'Proveedores',
        ])->assignRole($role1);
        Permission::create([
            'name'=>'providers.create',
            'description'=>'Crea cualquier dato de un proveedor del sistema.',
            'view' => 'Proveedores',
        ])->assignRole($role1);
        Permission::create([
            'name'=>'providers.destroy',
            'description'=>'Eliminar cualquier dato de un proveedor del sistema.',
            'view' => 'Proveedores',
        ])->assignRole($role1);

        
        Permission::create([
            'name'=>'purchases.index',
            'description'=>'Lista y navega por todos los compras del sistema.',
            'view' => 'Compras',
        ])->assignRole($role1);
        Permission::create([
            'name'=>'purchases.show',
            'description'=>'Ver en detalle cada compra del sistema.',
            'view' => 'Compras',
        ])->assignRole($role1);
        Permission::create([
            'name'=>'purchases.create',
            'description'=>'Crea cualquier dato de un compra del sistema.',
            'view' => 'Compras',
        ])->assignRole($role1);
        Permission::create([
            'name'=>'purchases.pdf',
            'description'=>'Puede descargar todos los reportes de las compras en PDF.',
            'view' => 'Compras',
        ])->assignRole($role1);
        Permission::create([
            'name'=>'upload.purchases',
            'description'=>'Puede subir comprobantes de una compra.',
            'view' => 'Compras',
        ])->assignRole($role1);
        Permission::create([
            'name' => 'change.status.purchases',
            'description' => 'Permite cambiar el estado de un compra.',
            'view' => 'Compras',
        ])->assignRole($role1);

         
        Permission::create([
            'name'=>'sales.index',
            'description'=>'Lista y navega por todos los ventas del sistema.',
            'view' => 'Ventas',
        ])->assignRole($role1);
        Permission::create([
            'name'=>'sales.show',
            'description'=>'Ver en detalle cada venta del sistema.',
            'view' => 'Ventas',
        ])->assignRole($role1);
        Permission::create([
            'name'=>'sales.create',
            'description'=>'Crea cualquier dato de un venta del sistema.',
            'view' => 'Ventas',
        ])->assignRole($role1);
        Permission::create([
            'name'=>'sales.pdf',
            'description'=>'Puede descargar todos los reportes de las ventas en PDF.',
            'view' => 'Ventas',
        ])->assignRole($role1);
        Permission::create([
            'name'=>'sales.print',
            'description'=>'Puede imprimir boletas de todas las ventas.',
            'view' => 'Ventas',
        ])->assignRole($role1);
        Permission::create([
            'name' => 'change.status.sales',
            'description' => 'Permite cambiar el estado de un venta.',
            'view' => 'Ventas',
        ])->assignRole($role1);



        Permission::create([
            'name'=>'business.index',
            'description'=>'Navega por los datos de la empresa.',
            'view' => 'Business',
        ])->assignRole($role1);
        Permission::create([
            'name'=>'business.edit',
            'description'=>'Editar cualquier dato de la empresa.',
            'view' => 'Business',
        ])->assignRole($role1);

        Permission::create([
            'name'=>'printers.index',
            'description'=>'Navega por los datos de la impresora.',
            'view' => 'Printers',
        ])->assignRole($role1);
        Permission::create([
            'name'=>'printers.edit',
            'description'=>'Editar cualquier dato de la impresora.',
            'view' => 'Printers',
        ])->assignRole($role1);

        Permission::create([
            'name'=>'reports.day',
            'description'=>'Permite ver los reportes de ventas por día.',
            'view' => 'Reportes',
        ])->assignRole($role1);
        Permission::create([
            'name'=>'reports.date',
            'description'=>'Permite ver los reportes por un rango de fechas de las ventas.',
            'view' => 'Reportes',
        ])->assignRole($role1);

    }
}
