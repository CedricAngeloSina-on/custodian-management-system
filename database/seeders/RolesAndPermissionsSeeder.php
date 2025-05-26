<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Laratrust\Models\Role;
use Laratrust\Models\Permission;

class RolesAndPermissionsSeeder extends Seeder
{
    public function run(): void
    {
        $roles = [
            'standard-user',  
            'administrator', 
        ];

        foreach ($roles as $role) {
            Role::create(['name' => $role]);
        }

        $permissions = [];

        foreach ($permissions as $permission) {
            Permission::create(['name' => $permission]);
        }
    }
}