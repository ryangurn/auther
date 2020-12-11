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
        $user_create = Permission::firstOrCreate(['name' => 'user.create']);
        $user_read = Permission::firstOrCreate(['name' => 'user.read']);
        $user_update = Permission::firstOrCreate(['name' => 'user.update']);
        $user_delete = Permission::firstOrCreate(['name' => 'user.delete']);
        $user_reverify = Permission::firstOrCreate(['name' => 'user.reverify']);

        $role_create = Permission::firstOrCreate(['name' => 'role.create']);
        $role_read = Permission::firstOrCreate(['name' => 'role.read']);
        $role_update = Permission::firstOrCreate(['name' => 'role.update']);
        $role_delete = Permission::firstOrCreate(['name' => 'role.delete']);
        $role_assign = Permission::firstOrCreate(['name' => 'role.assign']);
        $role_unassign = Permission::firstOrCreate(['name' => 'role.unassign']);
    }
}
