<?php

namespace Database\Seeders;

use App\Models\Role;
use Illuminate\Database\Seeder;

class RoleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Role::create(['name' => 'administrador']);
        Role::create(['name' => 'propietario de compañía']);
        Role::create(['name' => 'cliente']);
        Role::create(['name' => 'guía']);
    }
}
