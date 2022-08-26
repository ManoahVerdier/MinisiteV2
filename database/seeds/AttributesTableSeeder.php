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
                'id' => 13,
                'name' => 'prix',
                'displayName' => 'Prix',
                'type' => 'number',
                'created_at' => '2022-08-12 14:44:01',
                'updated_at' => '2022-08-12 14:44:01',
            ),
            1 => 
            array (
                'id' => 14,
                'name' => 'Francais',
                'displayName' => 'Français',
                'type' => 'radio_btn',
                'created_at' => '2022-08-12 14:44:19',
                'updated_at' => '2022-08-12 14:44:19',
            ),
            2 => 
            array (
                'id' => 15,
                'name' => 'Gratuit',
                'displayName' => 'Gratuit',
                'type' => 'radio_btn',
                'created_at' => '2022-08-12 14:44:28',
                'updated_at' => '2022-08-12 14:44:28',
            ),
            3 => 
            array (
                'id' => 16,
                'name' => 'EssaiGratuit',
                'displayName' => 'Essai Gratuit',
                'type' => 'radio_btn',
                'created_at' => '2022-08-12 14:44:42',
                'updated_at' => '2022-08-12 14:44:42',
            ),
            4 => 
            array (
                'id' => 17,
                'name' => 'DispoSur',
                'displayName' => 'Dispo sur',
                'type' => 'text',
                'created_at' => '2022-08-12 14:44:53',
                'updated_at' => '2022-08-12 14:44:53',
            ),
            5 => 
            array (
                'id' => 18,
                'name' => 'Langue',
                'displayName' => 'Langue',
                'type' => 'text',
                'created_at' => '2022-08-12 14:45:05',
                'updated_at' => '2022-08-12 14:45:05',
            ),
        ));
        
        
    }
}