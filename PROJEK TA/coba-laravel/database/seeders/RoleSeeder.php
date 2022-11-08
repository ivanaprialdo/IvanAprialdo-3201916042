<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Role;

class RoleSeeder extends Seeder
{
    
    public function run()
    {
        Role::updateOrCreate([
           'name' => 'staf_tu',
           'guard_name' => 'web'
        ]);

        Role::updateOrCreate([
            'name' => 'bpj',
            'guard_name' => 'web'
         ]);

        
    }
}
