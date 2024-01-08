<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Role;
use Spatie\Permission\Models\Permission;

class RolePermissionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $pro = Role::create(['name' => 'pro']);
        $pro_permission = Permission::create(['name' => 'access pro posts']);

        $pro->givePermissionTo($pro_permission);
        
        $user = User::where('name', 'Admin')->first();
        $user->assignRole($pro);
    }
}
