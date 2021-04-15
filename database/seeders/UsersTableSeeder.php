<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class UsersTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('users')->delete();
        
        \DB::table('users')->insert(array (
            0 => 
            array (
                'id' => 1,
                'name' => 'Admin',
                'email' => 'admin@admin.com',
                'email_verified_at' => NULL,
                'password' => '$2y$10$Ja9cVYqTWAZDXpxaH/97R.euNkTVFgoG.UXbHu8FgAo22izKwislq',
                'remember_token' => NULL,
                'created_at' => '2021-03-29 20:44:54',
                'updated_at' => '2021-04-12 10:05:34',
                'deleted_at' => NULL,
            ),
            1 => 
            array (
                'id' => 2,
                'name' => 'User',
                'email' => 'user@user.com',
                'email_verified_at' => NULL,
                'password' => '$2y$10$sIzbBSk4wORJqAD5viNOY./fNYUvLbZ2vWgD/T6uD.aOdaNd6KLAS',
                'remember_token' => NULL,
                'created_at' => '2021-03-29 20:44:54',
                'updated_at' => '2021-03-29 20:44:54',
                'deleted_at' => NULL,
            ),
            2 => 
            array (
                'id' => 6,
                'name' => 'Muhammad Umair Ghaznavi',
                'email' => 'muhammadumairghaznavi@gmail.com',
                'email_verified_at' => NULL,
                'password' => '$2y$10$BEhJQnXIlaqbi57oKU/CPe8B9vskA2ipVBN7YtYAxIRsYHZxzi78K',
                'remember_token' => NULL,
                'created_at' => '2021-04-12 10:25:12',
                'updated_at' => '2021-04-12 10:25:12',
                'deleted_at' => NULL,
            ),
        ));
        
        
    }
}