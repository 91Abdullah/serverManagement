<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class SolutionLocationTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('solution_location')->delete();
        
        \DB::table('solution_location')->insert(array (
            0 => 
            array (
                'id' => 1,
                'name' => 'Hosted',
                'created_at' => '2021-04-01 11:10:16',
                'updated_at' => '2021-04-06 12:19:55',
                'deleted_at' => NULL,
            ),
            1 => 
            array (
                'id' => 2,
                'name' => 'Resided',
                'created_at' => '2021-04-01 11:10:22',
                'updated_at' => '2021-04-01 11:10:22',
                'deleted_at' => NULL,
            ),
        ));
        
        
    }
}