<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class SolutionTypeTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('solution_type')->delete();
        
        \DB::table('solution_type')->insert(array (
            0 => 
            array (
                'id' => 1,
                'name' => 'IPeX',
                'created_at' => '2021-04-01 11:10:31',
                'updated_at' => '2021-04-06 11:51:13',
                'deleted_at' => NULL,
            ),
            1 => 
            array (
                'id' => 2,
                'name' => 'Contact Plus',
                'created_at' => '2021-04-01 11:10:38',
                'updated_at' => '2021-04-01 11:10:38',
                'deleted_at' => NULL,
            ),
            2 => 
            array (
                'id' => 3,
                'name' => 'CMS',
                'created_at' => '2021-04-01 11:10:43',
                'updated_at' => '2021-04-12 12:14:35',
                'deleted_at' => '2021-04-12 12:14:35',
            ),
            3 => 
            array (
                'id' => 4,
                'name' => 'CRM',
                'created_at' => '2021-04-01 11:10:47',
                'updated_at' => '2021-04-01 11:10:47',
                'deleted_at' => NULL,
            ),
            4 => 
            array (
                'id' => 5,
                'name' => 'Recording',
                'created_at' => '2021-04-01 11:10:56',
                'updated_at' => '2021-04-01 11:10:56',
                'deleted_at' => NULL,
            ),
            5 => 
            array (
                'id' => 6,
                'name' => 'Custom',
                'created_at' => '2021-04-01 11:11:00',
                'updated_at' => '2021-04-01 11:11:00',
                'deleted_at' => NULL,
            ),
        ));
        
        
    }
}