<?php

use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Permission;
use Spatie\Permission\Models\Role;

class RolesPermissionsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

        foreach (config('settings.roles') as $role)
        {
            Role::create(['name'=>$role]);
        }

        foreach (config('settings.permissions') as $permission)
        {
            Permission::create(['name'=>$permission]);
        }
    }
}
