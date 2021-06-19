<?php

use App\User;
use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Permission;
use Spatie\Permission\Models\Role;

class PermissionsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public $list = ['dashboards.index','settings.index','profile','generalInfo','changeImage'
                    ,'changePassword','users.admins','users.researchers','users.users'
                    ];

    public function run()
    {
        $role = Role::find(1);

        foreach (config('permission.modules') as $module) {

            foreach (config('permission.permissions') as $permission) {

                $permission = Permission::create([
                    'name' => $module . '.' . $permission,
                    'guard_name' => 'web'
                ]);

                $role->permissions()->save($permission);
            }
        }
        
        foreach($this->list as $i)
        {
            $permission = Permission::create([
                'name' => $i,
                'guard_name' => 'web'
                ]);

            $role->permissions()->save($permission);
        }

        



    }
}
