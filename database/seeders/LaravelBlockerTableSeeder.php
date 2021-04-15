<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class LaravelBlockerTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('laravel_blocker')->delete();
        
        \DB::table('laravel_blocker')->insert(array (
            0 => 
            array (
                'id' => 1,
                'typeId' => 3,
                'value' => 'test.com',
                'note' => 'Block all domains/emails @test.com',
                'userId' => NULL,
                'created_at' => '2021-03-30 06:44:48',
                'updated_at' => '2021-03-30 06:44:48',
                'deleted_at' => NULL,
            ),
            1 => 
            array (
                'id' => 2,
                'typeId' => 3,
                'value' => 'test.ca',
                'note' => 'Block all domains/emails @test.ca',
                'userId' => NULL,
                'created_at' => '2021-03-30 06:44:49',
                'updated_at' => '2021-03-30 06:44:49',
                'deleted_at' => NULL,
            ),
            2 => 
            array (
                'id' => 3,
                'typeId' => 3,
                'value' => 'fake.com',
                'note' => 'Block all domains/emails @fake.com',
                'userId' => NULL,
                'created_at' => '2021-03-30 06:44:49',
                'updated_at' => '2021-03-30 06:44:49',
                'deleted_at' => NULL,
            ),
            3 => 
            array (
                'id' => 4,
                'typeId' => 3,
                'value' => 'example.com',
                'note' => 'Block all domains/emails @example.com',
                'userId' => NULL,
                'created_at' => '2021-03-30 06:44:49',
                'updated_at' => '2021-03-30 06:44:49',
                'deleted_at' => NULL,
            ),
            4 => 
            array (
                'id' => 5,
                'typeId' => 3,
                'value' => 'mailinator.com',
                'note' => 'Block all domains/emails @mailinator.com',
                'userId' => NULL,
                'created_at' => '2021-03-30 06:44:49',
                'updated_at' => '2021-03-30 06:44:49',
                'deleted_at' => NULL,
            ),
        ));
        
        
    }
}