<?php

namespace Database\Seeders;

use App\Models\User;
use App\Models\Category;
use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Role;


class DatabaseSeeder extends Seeder
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

        $stafTu = User::updateOrCreate([  'username' => 'ivanaprialdo'],[
            'name' => 'Ivan Aprialdo',
            'phone' => '089520498844',
            'password' => bcrypt('12345')
        ]);

        $stafTu->assignRole('staf_tu');

        $bpj = User::updateOrCreate([  'username' => 'badanpengurusjemaat'],[
            'name' => 'Badan Pengurus Jemaat',
            'phone' => '089513591811',
            'password' => bcrypt('54321')
        ]);

        $bpj->assignRole('bpj');

        // User::factory(3)->create();

        Category::updateOrCreate([
            'name' => 'Renungan',
            'slug' => 'renungan'
        ]);

        Category::updateOrCreate([
            'name' => 'Program GKII Tiberias Sekadau',
            'slug' => 'program-gkii-tiberias-sekadau'
        ]);
        
        Category::updateOrCreate([
            'name' => 'Kegiatan GKII Tiberias Sekadau',
            'slug' => 'kegiatan-gkii-tiberias-sekadau'
        ]);   
        
       
    }
}
