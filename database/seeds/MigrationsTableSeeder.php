<?php

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
                'id' => 904,
                'migration' => '2015_08_05_133343_create_users_table',
                'batch' => 1,
            ),
            1 => 
            array (
                'id' => 905,
                'migration' => '2016_01_01_000000_add_voyager_user_fields',
                'batch' => 1,
            ),
            2 => 
            array (
                'id' => 906,
                'migration' => '2016_01_01_000000_create_data_types_table',
                'batch' => 1,
            ),
            3 => 
            array (
                'id' => 907,
                'migration' => '2016_05_19_173453_create_menu_table',
                'batch' => 1,
            ),
            4 => 
            array (
                'id' => 908,
                'migration' => '2016_10_21_190000_create_roles_table',
                'batch' => 1,
            ),
            5 => 
            array (
                'id' => 909,
                'migration' => '2016_10_21_190000_create_settings_table',
                'batch' => 1,
            ),
            6 => 
            array (
                'id' => 910,
                'migration' => '2016_11_30_135954_create_permission_table',
                'batch' => 1,
            ),
            7 => 
            array (
                'id' => 911,
                'migration' => '2016_11_30_141208_create_permission_role_table',
                'batch' => 1,
            ),
            8 => 
            array (
                'id' => 912,
                'migration' => '2016_12_26_201236_data_types__add__server_side',
                'batch' => 1,
            ),
            9 => 
            array (
                'id' => 913,
                'migration' => '2017_01_13_000000_add_route_to_menu_items_table',
                'batch' => 1,
            ),
            10 => 
            array (
                'id' => 914,
                'migration' => '2017_01_14_005015_create_translations_table',
                'batch' => 1,
            ),
            11 => 
            array (
                'id' => 915,
                'migration' => '2017_01_15_000000_make_table_name_nullable_in_permissions_table',
                'batch' => 1,
            ),
            12 => 
            array (
                'id' => 916,
                'migration' => '2017_03_06_000000_add_controller_to_data_types_table',
                'batch' => 1,
            ),
            13 => 
            array (
                'id' => 917,
                'migration' => '2017_04_21_000000_add_order_to_data_rows_table',
                'batch' => 1,
            ),
            14 => 
            array (
                'id' => 918,
                'migration' => '2017_07_05_210000_add_policyname_to_data_types_table',
                'batch' => 1,
            ),
            15 => 
            array (
                'id' => 919,
                'migration' => '2017_08_05_000000_add_group_to_settings_table',
                'batch' => 1,
            ),
            16 => 
            array (
                'id' => 920,
                'migration' => '2017_11_26_013050_add_user_role_relationship',
                'batch' => 1,
            ),
            17 => 
            array (
                'id' => 921,
                'migration' => '2017_11_26_015000_create_user_roles_table',
                'batch' => 1,
            ),
            18 => 
            array (
                'id' => 922,
                'migration' => '2018_03_11_000000_add_user_settings',
                'batch' => 1,
            ),
            19 => 
            array (
                'id' => 923,
                'migration' => '2018_03_14_000000_add_details_to_data_types_table',
                'batch' => 1,
            ),
            20 => 
            array (
                'id' => 924,
                'migration' => '2018_03_16_000000_make_settings_value_nullable',
                'batch' => 1,
            ),
            21 => 
            array (
                'id' => 925,
                'migration' => '2020_08_05_131518_create_contact_table',
                'batch' => 1,
            ),
            22 => 
            array (
                'id' => 926,
                'migration' => '2020_08_05_131518_create_pages_table',
                'batch' => 1,
            ),
            23 => 
            array (
                'id' => 927,
                'migration' => '2020_08_18_065114_alter_table_contact_message_null',
                'batch' => 1,
            ),
            24 => 
            array (
                'id' => 928,
                'migration' => '2020_08_19_101114_create_homepages_table',
                'batch' => 1,
            ),
            25 => 
            array (
                'id' => 929,
                'migration' => '2022_06_16_114710_create_faqs_table',
                'batch' => 1,
            ),
            26 => 
            array (
                'id' => 930,
                'migration' => '2022_06_16_114937_create_page_produit',
                'batch' => 1,
            ),
            27 => 
            array (
                'id' => 931,
                'migration' => '2022_06_21_062432_table_homepages_add_meta_title',
                'batch' => 1,
            ),
            28 => 
            array (
                'id' => 932,
                'migration' => '2022_06_23_072325_table_homepages_add_intro',
                'batch' => 1,
            ),
            29 => 
            array (
                'id' => 933,
                'migration' => '2022_08_10_092911_create_attributes_table',
                'batch' => 1,
            ),
            30 => 
            array (
                'id' => 934,
                'migration' => '2022_08_10_093137_create_products_table',
                'batch' => 1,
            ),
            31 => 
            array (
                'id' => 935,
                'migration' => '2022_08_11_125159_create_sessions_table',
                'batch' => 1,
            ),
            32 => 
            array (
                'id' => 938,
                'migration' => '2022_08_17_061740_create_categories_table',
                'batch' => 2,
            ),
            33 => 
            array (
                'id' => 939,
                'migration' => '2022_08_17_062206_table_product_add_category_id',
                'batch' => 2,
            ),
            34 => 
            array (
                'id' => 944,
                'migration' => '2022_08_18_053748_table_products_add_slug',
                'batch' => 3,
            ),
            35 => 
            array (
                'id' => 945,
                'migration' => '2022_08_24_063023_create_reviews_table',
                'batch' => 3,
            ),
            36 => 
            array (
                'id' => 946,
                'migration' => '2022_08_31_153605_table_homepages_add_titles',
                'batch' => 4,
            ),
        ));
        
        
    }
}