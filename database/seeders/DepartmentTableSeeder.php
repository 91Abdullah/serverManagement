<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class DepartmentTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('department')->delete();
        
        \DB::table('department')->insert(array (
            0 => 
            array (
                'id' => 1,
                'name' => 'IT',
                'created_at' => '2021-04-02 06:58:13',
                'updated_at' => '2021-04-02 06:58:13',
                'deleted_at' => NULL,
            ),
            1 => 
            array (
                'id' => 2,
                'name' => 'FEET',
                'created_at' => '2021-04-06 11:50:19',
                'updated_at' => '2021-04-06 11:50:19',
                'deleted_at' => NULL,
            ),
        ));
        
        
    }
}