<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class LaravelBlockerTypesTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('laravel_blocker_types')->delete();
        
        \DB::table('laravel_blocker_types')->insert(array (
            0 => 
            array (
                'id' => 1,
                'slug' => 'email',
                'name' => 'E-mail',
                'created_at' => '2021-03-30 06:44:47',
                'updated_at' => '2021-03-30 06:44:47',
                'deleted_at' => NULL,
            ),
            1 => 
            array (
                'id' => 2,
                'slug' => 'ipAddress',
                'name' => 'IP Address',
                'created_at' => '2021-03-30 06:44:47',
                'updated_at' => '2021-03-30 06:44:47',
                'deleted_at' => NULL,
            ),
            2 => 
            array (
                'id' => 3,
                'slug' => 'domain',
                'name' => 'Domain Name',
                'created_at' => '2021-03-30 06:44:48',
                'updated_at' => '2021-03-30 06:44:48',
                'deleted_at' => NULL,
            ),
            3 => 
            array (
                'id' => 4,
                'slug' => 'user',
                'name' => 'User',
                'created_at' => '2021-03-30 06:44:48',
                'updated_at' => '2021-03-30 06:44:48',
                'deleted_at' => NULL,
            ),
            4 => 
            array (
                'id' => 5,
                'slug' => 'city',
                'name' => 'City',
                'created_at' => '2021-03-30 06:44:48',
                'updated_at' => '2021-03-30 06:44:48',
                'deleted_at' => NULL,
            ),
            5 => 
            array (
                'id' => 6,
                'slug' => 'state',
                'name' => 'State',
                'created_at' => '2021-03-30 06:44:48',
                'updated_at' => '2021-03-30 06:44:48',
                'deleted_at' => NULL,
            ),
            6 => 
            array (
                'id' => 7,
                'slug' => 'country',
                'name' => 'Country',
                'created_at' => '2021-03-30 06:44:48',
                'updated_at' => '2021-03-30 06:44:48',
                'deleted_at' => NULL,
            ),
            7 => 
            array (
                'id' => 8,
                'slug' => 'countryCode',
                'name' => 'Country Code',
                'created_at' => '2021-03-30 06:44:48',
                'updated_at' => '2021-03-30 06:44:48',
                'deleted_at' => NULL,
            ),
            8 => 
            array (
                'id' => 9,
                'slug' => 'continent',
                'name' => 'Continent',
                'created_at' => '2021-03-30 06:44:48',
                'updated_at' => '2021-03-30 06:44:48',
                'deleted_at' => NULL,
            ),
            9 => 
            array (
                'id' => 10,
                'slug' => 'region',
                'name' => 'Region',
                'created_at' => '2021-03-30 06:44:48',
                'updated_at' => '2021-03-30 06:44:48',
                'deleted_at' => NULL,
            ),
        ));
        
        
    }
}