<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class SocialLoginsTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('social_logins')->delete();
        
        
        
    }
}