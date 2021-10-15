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
        $role0 = Role::create(['name' => 'Super']);
        $role1 = Role::create(['name' => 'Admin']);
        $role2  = Role::create(['name' => 'Consul1']);
        Permission::create(['name' => 'supersu'])->syncRoles([$role0]);
        Permission::create(['name' => 'editar'])->syncRoles([$role1]);
        Permission::create(['name' => 'crear'])->syncRoles([$role2]);

    }
}
