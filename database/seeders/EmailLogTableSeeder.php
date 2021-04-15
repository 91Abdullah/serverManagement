<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class EmailLogTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('email_log')->delete();
        
        
        
    }
}