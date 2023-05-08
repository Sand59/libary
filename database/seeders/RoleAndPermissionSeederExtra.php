<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Permission;
use Spatie\Permission\Models\Role;

class RoleAndPermissionSeederExtra extends Seeder
{
    public function run()
    {


        $role = Role::findByName('Staff');

        $role->givePermissionTo([
         'create-message',
         'edit-message',
         'delete-message',
      ]);
    }
}



