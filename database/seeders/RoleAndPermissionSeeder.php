<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Permission;
use Spatie\Permission\Models\Role;

class RoleAndPermissionSeeder extends Seeder
{
    public function run()
    {
        Permission::create(['name' => 'create-users']);
        Permission::create(['name' => 'edit-users']);
        Permission::create(['name' => 'delete-users']);

        Permission::create(['name' => 'loan-books']);

        $adminRole = Role::create(['name' => 'Admin']);
        $staffRole = Role::create(['name' => 'Staff']);
        $readerRole = Role::create(['name' => 'Reader']);

        $adminRole->givePermissionTo([
            'create-users',
            'edit-users',
            'delete-users',
            'loan-books',
        ]);

        $staffRole->givePermissionTo([
            'create-users',
            'edit-users',
            'delete-users',
            'loan-books',
         ]);
    }
}
