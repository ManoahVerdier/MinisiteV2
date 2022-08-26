<?php

use Illuminate\Database\Seeder;

class ReviewsTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('reviews')->delete();
        
        \DB::table('reviews')->insert(array (
            0 => 
            array (
                'id' => 1,
                'name' => 'sd',
                'image' => NULL,
                'global_rate' => 1,
                'client_service_rate' => 2,
                'functionalities_rate' => 3,
                'price_rate' => 4,
                'interface_rate' => 5,
                'comment' => 'ezgfezsg',
                'product_id' => 1,
                'created_at' => '2022-08-25 15:50:52',
                'updated_at' => '2022-08-25 15:50:52',
            ),
            1 => 
            array (
                'id' => 2,
                'name' => 'sd',
                'image' => NULL,
                'global_rate' => 1,
                'client_service_rate' => 2,
                'functionalities_rate' => 3,
                'price_rate' => 4,
                'interface_rate' => 5,
                'comment' => 'ezgfezsg',
                'product_id' => 1,
                'created_at' => '2022-08-25 15:52:38',
                'updated_at' => '2022-08-25 15:52:38',
            ),
            2 => 
            array (
                'id' => 3,
                'name' => 'sd',
                'image' => NULL,
                'global_rate' => 1,
                'client_service_rate' => 2,
                'functionalities_rate' => 3,
                'price_rate' => 4,
                'interface_rate' => 5,
                'comment' => 'ezgfezsg',
                'product_id' => 1,
                'created_at' => '2022-08-25 15:53:17',
                'updated_at' => '2022-08-25 15:53:17',
            ),
        ));
        
        
    }
}