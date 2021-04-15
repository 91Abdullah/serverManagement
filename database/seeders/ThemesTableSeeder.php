<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class ThemesTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('themes')->delete();
        
        \DB::table('themes')->insert(array (
            0 => 
            array (
                'id' => 1,
                'name' => 'Default',
                'link' => 'null',
                'notes' => NULL,
                'status' => 1,
                'taggable_type' => 'theme',
                'taggable_id' => 1,
                'created_at' => '2021-03-30 06:44:50',
                'updated_at' => '2021-03-30 06:44:51',
                'deleted_at' => NULL,
            ),
            1 => 
            array (
                'id' => 2,
                'name' => 'Darkly',
                'link' => 'https://maxcdn.bootstrapcdn.com/bootswatch/4.3.1/darkly/bootstrap.min.css',
                'notes' => NULL,
                'status' => 1,
                'taggable_type' => 'theme',
                'taggable_id' => 2,
                'created_at' => '2021-03-30 06:44:50',
                'updated_at' => '2021-03-30 06:44:51',
                'deleted_at' => NULL,
            ),
            2 => 
            array (
                'id' => 3,
                'name' => 'Cyborg',
                'link' => 'https://maxcdn.bootstrapcdn.com/bootswatch/4.3.1/cyborg/bootstrap.min.css',
                'notes' => NULL,
                'status' => 1,
                'taggable_type' => 'theme',
                'taggable_id' => 3,
                'created_at' => '2021-03-30 06:44:50',
                'updated_at' => '2021-03-30 06:44:51',
                'deleted_at' => NULL,
            ),
            3 => 
            array (
                'id' => 4,
                'name' => 'Cosmo',
                'link' => 'https://maxcdn.bootstrapcdn.com/bootswatch/4.3.1/cosmo/bootstrap.min.css',
                'notes' => NULL,
                'status' => 1,
                'taggable_type' => 'theme',
                'taggable_id' => 4,
                'created_at' => '2021-03-30 06:44:50',
                'updated_at' => '2021-03-30 06:44:51',
                'deleted_at' => NULL,
            ),
            4 => 
            array (
                'id' => 5,
                'name' => 'Cerulean',
                'link' => 'https://maxcdn.bootstrapcdn.com/bootswatch/4.3.1/cerulean/bootstrap.min.css',
                'notes' => NULL,
                'status' => 1,
                'taggable_type' => 'theme',
                'taggable_id' => 5,
                'created_at' => '2021-03-30 06:44:50',
                'updated_at' => '2021-03-30 06:44:51',
                'deleted_at' => NULL,
            ),
            5 => 
            array (
                'id' => 6,
                'name' => 'Flatly',
                'link' => 'https://maxcdn.bootstrapcdn.com/bootswatch/4.3.1/flatly/bootstrap.min.css',
                'notes' => NULL,
                'status' => 1,
                'taggable_type' => 'theme',
                'taggable_id' => 6,
                'created_at' => '2021-03-30 06:44:50',
                'updated_at' => '2021-03-30 06:44:52',
                'deleted_at' => NULL,
            ),
            6 => 
            array (
                'id' => 7,
                'name' => 'Journal',
                'link' => 'https://maxcdn.bootstrapcdn.com/bootswatch/4.3.1/journal/bootstrap.min.css',
                'notes' => NULL,
                'status' => 1,
                'taggable_type' => 'theme',
                'taggable_id' => 7,
                'created_at' => '2021-03-30 06:44:50',
                'updated_at' => '2021-03-30 06:44:52',
                'deleted_at' => NULL,
            ),
            7 => 
            array (
                'id' => 8,
                'name' => 'Lumen',
                'link' => 'https://maxcdn.bootstrapcdn.com/bootswatch/4.3.1/lumen/bootstrap.min.css',
                'notes' => NULL,
                'status' => 1,
                'taggable_type' => 'theme',
                'taggable_id' => 8,
                'created_at' => '2021-03-30 06:44:50',
                'updated_at' => '2021-03-30 06:44:52',
                'deleted_at' => NULL,
            ),
            8 => 
            array (
                'id' => 9,
                'name' => 'Paper',
                'link' => 'https://maxcdn.bootstrapcdn.com/bootswatch/4.3.1/paper/bootstrap.min.css',
                'notes' => NULL,
                'status' => 1,
                'taggable_type' => 'theme',
                'taggable_id' => 9,
                'created_at' => '2021-03-30 06:44:50',
                'updated_at' => '2021-03-30 06:44:52',
                'deleted_at' => NULL,
            ),
            9 => 
            array (
                'id' => 10,
                'name' => 'Readable',
                'link' => 'https://maxcdn.bootstrapcdn.com/bootswatch/4.3.1/readable/bootstrap.min.css',
                'notes' => NULL,
                'status' => 1,
                'taggable_type' => 'theme',
                'taggable_id' => 10,
                'created_at' => '2021-03-30 06:44:50',
                'updated_at' => '2021-03-30 06:44:52',
                'deleted_at' => NULL,
            ),
            10 => 
            array (
                'id' => 11,
                'name' => 'Sandstone',
                'link' => 'https://maxcdn.bootstrapcdn.com/bootswatch/4.3.1/sandstone/bootstrap.min.css',
                'notes' => NULL,
                'status' => 1,
                'taggable_type' => 'theme',
                'taggable_id' => 11,
                'created_at' => '2021-03-30 06:44:50',
                'updated_at' => '2021-03-30 06:44:52',
                'deleted_at' => NULL,
            ),
            11 => 
            array (
                'id' => 12,
                'name' => 'Simplex',
                'link' => 'https://maxcdn.bootstrapcdn.com/bootswatch/4.3.1/simplex/bootstrap.min.css',
                'notes' => NULL,
                'status' => 1,
                'taggable_type' => 'theme',
                'taggable_id' => 12,
                'created_at' => '2021-03-30 06:44:50',
                'updated_at' => '2021-03-30 06:44:52',
                'deleted_at' => NULL,
            ),
            12 => 
            array (
                'id' => 13,
                'name' => 'Slate',
                'link' => 'https://maxcdn.bootstrapcdn.com/bootswatch/4.3.1/slate/bootstrap.min.css',
                'notes' => NULL,
                'status' => 1,
                'taggable_type' => 'theme',
                'taggable_id' => 13,
                'created_at' => '2021-03-30 06:44:50',
                'updated_at' => '2021-03-30 06:44:52',
                'deleted_at' => NULL,
            ),
            13 => 
            array (
                'id' => 14,
                'name' => 'Spacelab',
                'link' => 'https://maxcdn.bootstrapcdn.com/bootswatch/4.3.1/spacelab/bootstrap.min.css',
                'notes' => NULL,
                'status' => 1,
                'taggable_type' => 'theme',
                'taggable_id' => 14,
                'created_at' => '2021-03-30 06:44:50',
                'updated_at' => '2021-03-30 06:44:52',
                'deleted_at' => NULL,
            ),
            14 => 
            array (
                'id' => 15,
                'name' => 'Superhero',
                'link' => 'https://maxcdn.bootstrapcdn.com/bootswatch/4.3.1/superhero/bootstrap.min.css',
                'notes' => NULL,
                'status' => 1,
                'taggable_type' => 'theme',
                'taggable_id' => 15,
                'created_at' => '2021-03-30 06:44:51',
                'updated_at' => '2021-03-30 06:44:52',
                'deleted_at' => NULL,
            ),
            15 => 
            array (
                'id' => 16,
                'name' => 'United',
                'link' => 'https://maxcdn.bootstrapcdn.com/bootswatch/4.3.1/united/bootstrap.min.css',
                'notes' => NULL,
                'status' => 1,
                'taggable_type' => 'theme',
                'taggable_id' => 16,
                'created_at' => '2021-03-30 06:44:51',
                'updated_at' => '2021-03-30 06:44:52',
                'deleted_at' => NULL,
            ),
            16 => 
            array (
                'id' => 17,
                'name' => 'Yeti',
                'link' => 'https://maxcdn.bootstrapcdn.com/bootswatch/4.3.1/yeti/bootstrap.min.css',
                'notes' => NULL,
                'status' => 1,
                'taggable_type' => 'theme',
                'taggable_id' => 17,
                'created_at' => '2021-03-30 06:44:51',
                'updated_at' => '2021-03-30 06:44:53',
                'deleted_at' => NULL,
            ),
            17 => 
            array (
                'id' => 18,
                'name' => 'Bootstrap 4.3.1',
                'link' => 'https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css',
                'notes' => NULL,
                'status' => 1,
                'taggable_type' => 'theme',
                'taggable_id' => 18,
                'created_at' => '2021-03-30 06:44:51',
                'updated_at' => '2021-03-30 06:44:53',
                'deleted_at' => NULL,
            ),
            18 => 
            array (
                'id' => 19,
                'name' => 'Materialize',
                'link' => 'https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/css/materialize.css',
                'notes' => NULL,
                'status' => 1,
                'taggable_type' => 'theme',
                'taggable_id' => 19,
                'created_at' => '2021-03-30 06:44:51',
                'updated_at' => '2021-03-30 06:44:53',
                'deleted_at' => NULL,
            ),
            19 => 
            array (
                'id' => 20,
            'name' => 'Material Design for Bootstrap (MDB) 4.8.7',
                'link' => 'https://cdnjs.cloudflare.com/ajax/libs/mdbootstrap/4.8.7/css/mdb.css',
                'notes' => NULL,
                'status' => 1,
                'taggable_type' => 'theme',
                'taggable_id' => 20,
                'created_at' => '2021-03-30 06:44:51',
                'updated_at' => '2021-03-30 06:44:53',
                'deleted_at' => NULL,
            ),
            20 => 
            array (
                'id' => 21,
                'name' => 'mdbootstrap',
                'link' => 'https://cdnjs.cloudflare.com/ajax/libs/mdbootstrap/4.3.1/css/mdb.min.css',
                'notes' => NULL,
                'status' => 1,
                'taggable_type' => 'theme',
                'taggable_id' => 21,
                'created_at' => '2021-03-30 06:44:51',
                'updated_at' => '2021-03-30 06:44:53',
                'deleted_at' => NULL,
            ),
            21 => 
            array (
                'id' => 22,
                'name' => 'Litera',
                'link' => 'https://maxcdn.bootstrapcdn.com/bootswatch/4.3.1/litera/bootstrap.min.css',
                'notes' => NULL,
                'status' => 1,
                'taggable_type' => 'theme',
                'taggable_id' => 22,
                'created_at' => '2021-03-30 06:44:51',
                'updated_at' => '2021-03-30 06:44:53',
                'deleted_at' => NULL,
            ),
            22 => 
            array (
                'id' => 23,
                'name' => 'Lux',
                'link' => 'https://maxcdn.bootstrapcdn.com/bootswatch/4.3.1/lux/bootstrap.min.css',
                'notes' => NULL,
                'status' => 1,
                'taggable_type' => 'theme',
                'taggable_id' => 23,
                'created_at' => '2021-03-30 06:44:51',
                'updated_at' => '2021-03-30 06:44:53',
                'deleted_at' => NULL,
            ),
            23 => 
            array (
                'id' => 24,
                'name' => 'Materia',
                'link' => 'https://maxcdn.bootstrapcdn.com/bootswatch/4.3.1/materia/bootstrap.min.css',
                'notes' => NULL,
                'status' => 1,
                'taggable_type' => 'theme',
                'taggable_id' => 24,
                'created_at' => '2021-03-30 06:44:51',
                'updated_at' => '2021-03-30 06:44:53',
                'deleted_at' => NULL,
            ),
            24 => 
            array (
                'id' => 25,
                'name' => 'Minty',
                'link' => 'https://maxcdn.bootstrapcdn.com/bootswatch/4.3.1/minty/bootstrap.min.css',
                'notes' => NULL,
                'status' => 1,
                'taggable_type' => 'theme',
                'taggable_id' => 25,
                'created_at' => '2021-03-30 06:44:51',
                'updated_at' => '2021-03-30 06:44:53',
                'deleted_at' => NULL,
            ),
            25 => 
            array (
                'id' => 26,
                'name' => 'Pulse',
                'link' => 'https://maxcdn.bootstrapcdn.com/bootswatch/4.3.1/pulse/bootstrap.min.css',
                'notes' => NULL,
                'status' => 1,
                'taggable_type' => 'theme',
                'taggable_id' => 26,
                'created_at' => '2021-03-30 06:44:51',
                'updated_at' => '2021-03-30 06:44:53',
                'deleted_at' => NULL,
            ),
            26 => 
            array (
                'id' => 27,
                'name' => 'Sketchy',
                'link' => 'https://maxcdn.bootstrapcdn.com/bootswatch/4.3.1/sketchy/bootstrap.min.css',
                'notes' => NULL,
                'status' => 1,
                'taggable_type' => 'theme',
                'taggable_id' => 27,
                'created_at' => '2021-03-30 06:44:51',
                'updated_at' => '2021-03-30 06:44:53',
                'deleted_at' => NULL,
            ),
            27 => 
            array (
                'id' => 28,
                'name' => 'Solar',
                'link' => 'https://maxcdn.bootstrapcdn.com/bootswatch/4.3.1/solar/bootstrap.min.css',
                'notes' => NULL,
                'status' => 1,
                'taggable_type' => 'theme',
                'taggable_id' => 28,
                'created_at' => '2021-03-30 06:44:51',
                'updated_at' => '2021-03-30 06:44:53',
                'deleted_at' => NULL,
            ),
        ));
        
        
    }
}