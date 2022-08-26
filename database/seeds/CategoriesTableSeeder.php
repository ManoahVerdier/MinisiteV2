<?php

use Illuminate\Database\Seeder;

class CategoriesTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('categories')->delete();
        
        \DB::table('categories')->insert(array (
            0 => 
            array (
                'id' => 1,
                'parent_id' => NULL,
                'name' => 'Systèmes d\'exploitation',
                'slug' => 'os',
                'created_at' => '2022-08-17 08:47:35',
                'updated_at' => '2022-08-17 08:47:35',
            ),
            1 => 
            array (
                'id' => 3,
                'parent_id' => 1,
                'name' => 'Systèmes récents',
                'slug' => 'recent-os',
                'created_at' => '2022-08-19 10:30:17',
                'updated_at' => '2022-08-19 10:30:17',
            ),
            2 => 
            array (
                'id' => 4,
                'parent_id' => 1,
                'name' => 'Systèmes anciens',
                'slug' => 'old-systems',
                'created_at' => '2022-08-19 10:30:40',
                'updated_at' => '2022-08-19 10:30:40',
            ),
        ));
        
        
    }
}