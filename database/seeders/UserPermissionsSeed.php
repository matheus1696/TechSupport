<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

use App\Models\UserPermissionsModel;

class UserPermissionsSeed extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        UserPermissionsModel::create([
            'name'=>'sysadmin',
            'guard_name'=>'web'
        ]);
        UserPermissionsModel::create([
            'name'=>'admin',
            'guard_name'=>'web'
        ]);
        UserPermissionsModel::create([
            'name'=>'user',
            'guard_name'=>'web'
        ]);
        UserPermissionsModel::create([
            'name'=>'bidding',
            'guard_name'=>'web'
        ]);
    }
}
