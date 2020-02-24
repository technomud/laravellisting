<?php


use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Role;
use Spatie\Permission\Models\Permission;

class RolesAndPermissionsSeeder extends Seeder
{
    public function run()
    {
        // Reset cached roles and permissions
        app()[\Spatie\Permission\PermissionRegistrar::class]->forgetCachedPermissions();

        // create permissions
        Permission::create(['name' => 'edit doctors']);
        Permission::create(['name' => 'delete doctors']);
        Permission::create(['name' => 'add doctors']);
        Permission::create(['name' => 'self edit']);
        // create roles and assign created permissions

        // this can be done as separate statements
        $role = Role::create(['name' => 'doctor']);
        $role->givePermissionTo('self');
 

        $role = Role::create(['name' => 'super-admin']);
        $role->givePermissionTo(Permission::all());
    }
}