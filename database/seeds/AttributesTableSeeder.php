<?php

use Illuminate\Database\Seeder;

class AttributesTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('attributes')->delete();
        
        \DB::table('attributes')->insert(array (
            0 => 
            array (
                'created_at' => '2022-08-12 13:48:48',
                'displayName' => 'Français',
                'id' => 1,
                'name' => 'Francais',
                'type' => 'radio_btn',
                'updated_at' => '2022-08-12 13:48:48',
            ),
            1 => 
            array (
                'created_at' => '2022-08-12 13:49:01',
                'displayName' => 'Langue',
                'id' => 2,
                'name' => 'Langue',
                'type' => 'text',
                'updated_at' => '2022-08-12 13:49:01',
            ),
            2 => 
            array (
                'created_at' => '2022-08-12 13:49:13',
                'displayName' => 'Gratuit',
                'id' => 3,
                'name' => 'Gratuit',
                'type' => 'radio_btn',
                'updated_at' => '2022-08-12 13:49:13',
            ),
            3 => 
            array (
                'created_at' => '2022-08-12 13:49:27',
                'displayName' => 'Essai Gratuit',
                'id' => 4,
                'name' => 'EssaiGratuit',
                'type' => 'radio_btn',
                'updated_at' => '2022-08-12 13:49:27',
            ),
            4 => 
            array (
                'created_at' => '2022-08-12 13:49:46',
                'displayName' => 'Disponible sur',
                'id' => 5,
                'name' => 'DispoSur',
                'type' => 'text',
                'updated_at' => '2022-08-12 13:49:46',
            ),
            5 => 
            array (
                'created_at' => '2022-08-12 13:55:31',
                'displayName' => 'Prix',
                'id' => 6,
                'name' => 'prix',
                'type' => 'number',
                'updated_at' => '2022-08-12 13:55:31',
            ),
        ));
        
        
    }
}