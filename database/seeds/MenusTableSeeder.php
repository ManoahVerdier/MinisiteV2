<?php

use Illuminate\Database\Seeder;

class MenusTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('menus')->delete();
        
        \DB::table('menus')->insert(array (
            0 => 
            array (
                'id' => 1,
                'name' => 'admin',
                'created_at' => '2020-08-05 14:51:11',
                'updated_at' => '2020-08-05 14:51:11',
            ),
            1 => 
            array (
                'id' => 2,
                'name' => 'main_menu',
                'created_at' => '2022-06-09 19:11:16',
                'updated_at' => '2022-06-09 19:11:25',
            ),
            2 => 
            array (
                'id' => 3,
                'name' => 'footer',
                'created_at' => '2022-06-16 13:34:50',
                'updated_at' => '2022-06-16 13:34:50',
            ),
        ));
        
        
    }
}