<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class CitiesTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('cities')->delete();
        
        \DB::table('cities')->insert(array (
            0 => 
            array (
                'id' => 3,
                'name' => 'Karachi',
                'created_at' => '2021-04-01 07:25:50',
                'updated_at' => '2021-04-01 07:25:50',
                'deleted_at' => NULL,
            ),
            1 => 
            array (
                'id' => 4,
                'name' => 'Lahore',
                'created_at' => '2021-04-01 10:48:51',
                'updated_at' => '2021-04-01 10:48:51',
                'deleted_at' => NULL,
            ),
            2 => 
            array (
                'id' => 5,
                'name' => 'Islamabad',
                'created_at' => '2021-04-05 05:29:35',
                'updated_at' => '2021-04-05 05:29:35',
                'deleted_at' => NULL,
            ),
        ));
        
        
    }
}