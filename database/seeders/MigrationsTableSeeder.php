<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class MigrationsTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('migrations')->delete();
        
        \DB::table('migrations')->insert(array (
            0 => 
            array (
                'id' => 1,
                'migration' => '2014_10_12_000000_create_users_table',
                'batch' => 1,
            ),
            1 => 
            array (
                'id' => 2,
                'migration' => '2014_10_12_100000_create_password_resets_table',
                'batch' => 1,
            ),
            2 => 
            array (
                'id' => 3,
                'migration' => '2019_08_19_000000_create_failed_jobs_table',
                'batch' => 1,
            ),
            3 => 
            array (
                'id' => 4,
                'migration' => '2021_03_17_110100_create_projects_table',
                'batch' => 2,
            ),
            4 => 
            array (
                'id' => 5,
                'migration' => '2021_04_01_060737_create-cities-table',
                'batch' => 3,
            ),
            5 => 
            array (
                'id' => 6,
                'migration' => '2021_04_01_065230_create_solution_location',
                'batch' => 4,
            ),
            6 => 
            array (
                'id' => 7,
                'migration' => '2021_04_01_065435_create_solution_type_table',
                'batch' => 5,
            ),
            7 => 
            array (
                'id' => 8,
                'migration' => '2021_04_01_071111_add_softdelete_to_solution_location',
                'batch' => 6,
            ),
            8 => 
            array (
                'id' => 9,
                'migration' => '2021_04_01_071239_add_softdelete_to_solution_type',
                'batch' => 7,
            ),
            9 => 
            array (
                'id' => 10,
                'migration' => '2021_04_01_080605_create_servers_table',
                'batch' => 8,
            ),
            10 => 
            array (
                'id' => 11,
                'migration' => '2021_04_01_111341_add_columns_to_servers',
                'batch' => 9,
            ),
            11 => 
            array (
                'id' => 12,
                'migration' => '2021_04_02_060457_create_department_table',
                'batch' => 10,
            ),
            12 => 
            array (
                'id' => 13,
                'migration' => '2021_04_02_061939_add_column_to_servers',
                'batch' => 11,
            ),
            13 => 
            array (
                'id' => 14,
                'migration' => '2021_04_06_072401_create_blogs_table',
                'batch' => 12,
            ),
            14 => 
            array (
                'id' => 15,
                'migration' => '2021_04_12_080042_create_permission_tables',
                'batch' => 13,
            ),
        ));
        
        
    }
}