<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Permission;
use Spatie\Permission\Models\Role;

class PermissionsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // roles
        $admin = Role::firstOrCreate(['name' => 'admin']);
        $normal = Role::firstOrCreate(['name' => 'normal']);

        // permissions
        $user_create = Permission::firstOrCreate(['name' => 'user.create', 'description' => 'This permission controls a users ability to create another user.']);
        $user_read = Permission::firstOrCreate(['name' => 'user.read', 'description' => 'This permission controls a users ability to read information on another user.']);
        $user_update = Permission::firstOrCreate(['name' => 'user.update', 'description' => 'This permission controls a users ability to update another user.']);
        $user_delete = Permission::firstOrCreate(['name' => 'user.delete', 'description' => 'This permission controls a users ability to delete or disable another user.']);
        $user_reverify = Permission::firstOrCreate(['name' => 'user.reverify', 'description' => 'This permission controls a users ability to force a reverification of another user.']);
        $user_assign = Permission::firstOrCreate(['name' => 'user.assign', 'description' => 'This permission controls a users ability to assign roles to another user.']);
        $user_unassign = Permission::firstOrCreate(['name' => 'user.unassign', 'description' => 'This permission controls a users ability to unassign roles from another user.']);


        $role_create = Permission::firstOrCreate(['name' => 'role.create', 'description' => 'This permission controls a users ability to create a role.']);
        $role_read = Permission::firstOrCreate(['name' => 'role.read', 'description' => 'This permission controls a users ability to read information on a role.']);
        $role_update = Permission::firstOrCreate(['name' => 'role.update', 'description' => 'This permission controls a users ability to update a role.']);
        $role_delete = Permission::firstOrCreate(['name' => 'role.delete', 'description' => 'This permission controls a users ability to delete a role.']);
        $role_assign = Permission::firstOrCreate(['name' => 'role.assign', 'description' => 'This permission controls a users ability to assign permissions to a role.']);
        $role_unassign = Permission::firstOrCreate(['name' => 'role.unassign', 'description' => 'This permission controls a users ability to unassign permissions from a role.']);

        $admin_sync = [$user_create, $user_read, $user_update, $user_delete, $user_reverify, $user_assign, $user_unassign,
            $role_create, $role_read, $role_update, $role_delete, $role_assign, $role_unassign];
        $normal_sync = [$user_read, $role_read];

        $admin->syncPermissions($admin_sync);
        $normal->syncPermissions($normal_sync);
    }
}
