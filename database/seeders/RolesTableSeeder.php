<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class RolesTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('roles')->delete();
        
        \DB::table('roles')->insert(array (
            0 => 
            array (
                'id' => 3,
                'name' => 'Admin',
                'guard_name' => 'web',
                'created_at' => '2021-04-12 10:25:12',
                'updated_at' => '2021-04-12 10:25:12',
            ),
            1 => 
            array (
                'id' => 4,
                'name' => 'Manager',
                'guard_name' => 'web',
                'created_at' => '2021-04-12 10:26:28',
                'updated_at' => '2021-04-12 10:26:28',
            ),
        ));
        
        
    }
}