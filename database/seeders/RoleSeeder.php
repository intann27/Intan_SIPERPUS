<?php

namespace Database\Seeders;

use App\Models\permission;
use App\Models\Role;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;


class RoleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $role = Role::create(["name" => "pustakawan"]);
        $permission = Permission::create(['name' => 'edit_users']);
        Role::create(["name" => "mahasiswa"]);
        Permission::create(['name' => 'view_book']);
    }
}
