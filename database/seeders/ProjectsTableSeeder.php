<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class ProjectsTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('projects')->delete();
        
        \DB::table('projects')->insert(array (
            0 => 
            array (
                'id' => 1,
                'project_name' => 'asd',
                'project_description' => 'asd',
                'created_at' => '2021-03-17 11:22:45',
                'updated_at' => '2021-03-17 11:22:45',
                'deleted_at' => NULL,
            ),
        ));
        
        
    }
}