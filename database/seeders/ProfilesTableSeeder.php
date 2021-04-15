<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class ProfilesTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('profiles')->delete();
        
        \DB::table('profiles')->insert(array (
            0 => 
            array (
                'id' => 1,
                'user_id' => 1,
                'theme_id' => 1,
                'location' => NULL,
                'bio' => NULL,
                'twitter_username' => NULL,
                'github_username' => NULL,
                'avatar' => NULL,
                'avatar_status' => 0,
                'created_at' => '2021-03-30 06:44:54',
                'updated_at' => '2021-03-30 06:44:54',
            ),
            1 => 
            array (
                'id' => 2,
                'user_id' => 2,
                'theme_id' => 1,
                'location' => NULL,
                'bio' => NULL,
                'twitter_username' => NULL,
                'github_username' => NULL,
                'avatar' => NULL,
                'avatar_status' => 0,
                'created_at' => '2021-03-30 06:44:54',
                'updated_at' => '2021-03-30 06:44:54',
            ),
        ));
        
        
    }
}