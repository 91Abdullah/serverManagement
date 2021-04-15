<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class PermissionsTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('permissions')->delete();
        
        \DB::table('permissions')->insert(array (
            0 => 
            array (
                'id' => 9,
                'name' => 'role-list',
                'nick_name' => 'View List',
                'guard_name' => 'web',
                'created_at' => '2021-04-12 10:23:49',
                'updated_at' => '2021-04-12 10:23:49',
                'deleted_at' => NULL,
            ),
            1 => 
            array (
                'id' => 10,
                'name' => 'role-create',
                'nick_name' => 'Create',
                'guard_name' => 'web',
                'created_at' => '2021-04-12 10:23:49',
                'updated_at' => '2021-04-12 10:23:49',
                'deleted_at' => NULL,
            ),
            2 => 
            array (
                'id' => 11,
                'name' => 'role-edit',
                'nick_name' => 'Edit',
                'guard_name' => 'web',
                'created_at' => '2021-04-12 10:23:49',
                'updated_at' => '2021-04-12 10:23:49',
                'deleted_at' => NULL,
            ),
            3 => 
            array (
                'id' => 12,
                'name' => 'role-delete',
                'nick_name' => 'Delete',
                'guard_name' => 'web',
                'created_at' => '2021-04-12 10:23:49',
                'updated_at' => '2021-04-12 10:23:49',
                'deleted_at' => NULL,
            ),
            4 => 
            array (
                'id' => 13,
                'name' => 'server-list',
                'nick_name' => 'View List',
                'guard_name' => 'web',
                'created_at' => '2021-04-12 10:23:49',
                'updated_at' => '2021-04-12 10:23:49',
                'deleted_at' => NULL,
            ),
            5 => 
            array (
                'id' => 14,
                'name' => 'server-create',
                'nick_name' => 'Create',
                'guard_name' => 'web',
                'created_at' => '2021-04-12 10:23:49',
                'updated_at' => '2021-04-12 10:23:49',
                'deleted_at' => NULL,
            ),
            6 => 
            array (
                'id' => 15,
                'name' => 'server-edit',
                'nick_name' => 'Edit',
                'guard_name' => 'web',
                'created_at' => '2021-04-12 10:23:49',
                'updated_at' => '2021-04-12 10:23:49',
                'deleted_at' => NULL,
            ),
            7 => 
            array (
                'id' => 16,
                'name' => 'server-delete',
                'nick_name' => 'Delete',
                'guard_name' => 'web',
                'created_at' => '2021-04-12 10:23:49',
                'updated_at' => '2021-04-12 10:23:49',
                'deleted_at' => NULL,
            ),
            8 => 
            array (
                'id' => 17,
                'name' => 'city-list',
                'nick_name' => 'View List',
                'guard_name' => 'web',
                'created_at' => '2021-04-12 10:23:49',
                'updated_at' => '2021-04-12 10:23:49',
                'deleted_at' => NULL,
            ),
            9 => 
            array (
                'id' => 18,
                'name' => 'city-create',
                'nick_name' => 'Create',
                'guard_name' => 'web',
                'created_at' => '2021-04-12 10:23:49',
                'updated_at' => '2021-04-12 10:23:49',
                'deleted_at' => NULL,
            ),
            10 => 
            array (
                'id' => 19,
                'name' => 'city-edit',
                'nick_name' => 'Edit',
                'guard_name' => 'web',
                'created_at' => '2021-04-12 10:23:50',
                'updated_at' => '2021-04-12 10:23:50',
                'deleted_at' => NULL,
            ),
            11 => 
            array (
                'id' => 20,
                'name' => 'city-delete',
                'nick_name' => 'Delete',
                'guard_name' => 'web',
                'created_at' => '2021-04-12 10:23:50',
                'updated_at' => '2021-04-12 10:23:50',
                'deleted_at' => NULL,
            ),
            12 => 
            array (
                'id' => 21,
                'name' => 'department-list',
                'nick_name' => 'View List',
                'guard_name' => 'web',
                'created_at' => '2021-04-12 10:23:50',
                'updated_at' => '2021-04-12 10:23:50',
                'deleted_at' => NULL,
            ),
            13 => 
            array (
                'id' => 22,
                'name' => 'department-create',
                'nick_name' => 'Create',
                'guard_name' => 'web',
                'created_at' => '2021-04-12 10:23:50',
                'updated_at' => '2021-04-12 10:23:50',
                'deleted_at' => NULL,
            ),
            14 => 
            array (
                'id' => 23,
                'name' => 'department-edit',
                'nick_name' => 'Edit',
                'guard_name' => 'web',
                'created_at' => '2021-04-12 10:23:50',
                'updated_at' => '2021-04-12 10:23:50',
                'deleted_at' => NULL,
            ),
            15 => 
            array (
                'id' => 24,
                'name' => 'department-delete',
                'nick_name' => 'Delete',
                'guard_name' => 'web',
                'created_at' => '2021-04-12 10:23:50',
                'updated_at' => '2021-04-12 10:23:50',
                'deleted_at' => NULL,
            ),
            16 => 
            array (
                'id' => 25,
                'name' => 'user-list',
                'nick_name' => 'View List',
                'guard_name' => 'web',
                'created_at' => '2021-04-12 10:23:50',
                'updated_at' => '2021-04-12 10:23:50',
                'deleted_at' => NULL,
            ),
            17 => 
            array (
                'id' => 26,
                'name' => 'user-create',
                'nick_name' => 'Create',
                'guard_name' => 'web',
                'created_at' => '2021-04-12 10:23:50',
                'updated_at' => '2021-04-12 10:23:50',
                'deleted_at' => NULL,
            ),
            18 => 
            array (
                'id' => 27,
                'name' => 'user-edit',
                'nick_name' => 'Edit',
                'guard_name' => 'web',
                'created_at' => '2021-04-12 10:23:50',
                'updated_at' => '2021-04-12 10:23:50',
                'deleted_at' => NULL,
            ),
            19 => 
            array (
                'id' => 28,
                'name' => 'user-delete',
                'nick_name' => 'Delete',
                'guard_name' => 'web',
                'created_at' => '2021-04-12 10:23:50',
                'updated_at' => '2021-04-12 10:23:50',
                'deleted_at' => NULL,
            ),
            20 => 
            array (
                'id' => 29,
                'name' => 'solution-type-list',
                'nick_name' => 'View List',
                'guard_name' => 'web',
                'created_at' => '2021-04-12 10:23:50',
                'updated_at' => '2021-04-12 10:23:50',
                'deleted_at' => NULL,
            ),
            21 => 
            array (
                'id' => 30,
                'name' => 'solution-type-create',
                'nick_name' => 'Create',
                'guard_name' => 'web',
                'created_at' => '2021-04-12 10:23:50',
                'updated_at' => '2021-04-12 10:23:50',
                'deleted_at' => NULL,
            ),
            22 => 
            array (
                'id' => 31,
                'name' => 'solution-type-edit',
                'nick_name' => 'Edit',
                'guard_name' => 'web',
                'created_at' => '2021-04-12 10:23:50',
                'updated_at' => '2021-04-12 10:23:50',
                'deleted_at' => NULL,
            ),
            23 => 
            array (
                'id' => 32,
                'name' => 'solution-type-delete',
                'nick_name' => 'Delete',
                'guard_name' => 'web',
                'created_at' => '2021-04-12 10:23:51',
                'updated_at' => '2021-04-12 10:23:51',
                'deleted_at' => NULL,
            ),
            24 => 
            array (
                'id' => 33,
                'name' => 'solution-location-list',
                'nick_name' => 'View List',
                'guard_name' => 'web',
                'created_at' => '2021-04-12 10:23:51',
                'updated_at' => '2021-04-12 10:23:51',
                'deleted_at' => NULL,
            ),
            25 => 
            array (
                'id' => 34,
                'name' => 'solution-location-create',
                'nick_name' => 'Create',
                'guard_name' => 'web',
                'created_at' => '2021-04-12 10:23:51',
                'updated_at' => '2021-04-12 10:23:51',
                'deleted_at' => NULL,
            ),
            26 => 
            array (
                'id' => 35,
                'name' => 'solution-location-edit',
                'nick_name' => 'Edit',
                'guard_name' => 'web',
                'created_at' => '2021-04-12 10:23:51',
                'updated_at' => '2021-04-12 10:23:51',
                'deleted_at' => NULL,
            ),
            27 => 
            array (
                'id' => 36,
                'name' => 'solution-location-delete',
                'nick_name' => 'Delete',
                'guard_name' => 'web',
                'created_at' => '2021-04-12 10:23:51',
                'updated_at' => '2021-04-12 10:23:51',
                'deleted_at' => NULL,
            ),
            28 => 
            array (
                'id' => 37,
                'name' => 'blog-list',
                'nick_name' => 'View List',
                'guard_name' => 'web',
                'created_at' => '2021-04-12 10:23:51',
                'updated_at' => '2021-04-12 10:23:51',
                'deleted_at' => NULL,
            ),
            29 => 
            array (
                'id' => 38,
                'name' => 'blog-create',
                'nick_name' => 'Create',
                'guard_name' => 'web',
                'created_at' => '2021-04-12 10:23:51',
                'updated_at' => '2021-04-12 10:23:51',
                'deleted_at' => NULL,
            ),
            30 => 
            array (
                'id' => 39,
                'name' => 'blog-edit',
                'nick_name' => 'Edit',
                'guard_name' => 'web',
                'created_at' => '2021-04-12 10:23:51',
                'updated_at' => '2021-04-12 10:23:51',
                'deleted_at' => NULL,
            ),
            31 => 
            array (
                'id' => 40,
                'name' => 'blog-delete',
                'nick_name' => 'Delete',
                'guard_name' => 'web',
                'created_at' => '2021-04-12 10:23:51',
                'updated_at' => '2021-04-12 10:23:51',
                'deleted_at' => NULL,
            ),
            32 => 
            array (
                'id' => 42,
                'name' => 'documentation-view',
                'nick_name' => 'Delete',
                'guard_name' => 'web',
                'created_at' => '2021-04-12 12:44:42',
                'updated_at' => '2021-04-12 12:44:42',
                'deleted_at' => NULL,
            ),
            33 => 
            array (
                'id' => 43,
                'name' => 'run',
                'nick_name' => 'Run',
                'guard_name' => 'web',
                'created_at' => '2021-04-14 07:57:59',
                'updated_at' => '2021-04-14 07:59:31',
                'deleted_at' => NULL,
            ),
        ));
        
        
    }
}