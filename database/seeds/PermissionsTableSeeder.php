<?php

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
                'id' => 1,
                'key' => 'browse_admin',
                'table_name' => NULL,
                'created_at' => '2020-08-05 14:51:11',
                'updated_at' => '2020-08-05 14:51:11',
            ),
            1 => 
            array (
                'id' => 2,
                'key' => 'browse_bread',
                'table_name' => NULL,
                'created_at' => '2020-08-05 14:51:11',
                'updated_at' => '2020-08-05 14:51:11',
            ),
            2 => 
            array (
                'id' => 3,
                'key' => 'browse_database',
                'table_name' => NULL,
                'created_at' => '2020-08-05 14:51:11',
                'updated_at' => '2020-08-05 14:51:11',
            ),
            3 => 
            array (
                'id' => 4,
                'key' => 'browse_media',
                'table_name' => NULL,
                'created_at' => '2020-08-05 14:51:11',
                'updated_at' => '2020-08-05 14:51:11',
            ),
            4 => 
            array (
                'id' => 5,
                'key' => 'browse_compass',
                'table_name' => NULL,
                'created_at' => '2020-08-05 14:51:11',
                'updated_at' => '2020-08-05 14:51:11',
            ),
            5 => 
            array (
                'id' => 6,
                'key' => 'browse_menus',
                'table_name' => 'menus',
                'created_at' => '2020-08-05 14:51:11',
                'updated_at' => '2020-08-05 14:51:11',
            ),
            6 => 
            array (
                'id' => 7,
                'key' => 'read_menus',
                'table_name' => 'menus',
                'created_at' => '2020-08-05 14:51:11',
                'updated_at' => '2020-08-05 14:51:11',
            ),
            7 => 
            array (
                'id' => 8,
                'key' => 'edit_menus',
                'table_name' => 'menus',
                'created_at' => '2020-08-05 14:51:11',
                'updated_at' => '2020-08-05 14:51:11',
            ),
            8 => 
            array (
                'id' => 9,
                'key' => 'add_menus',
                'table_name' => 'menus',
                'created_at' => '2020-08-05 14:51:11',
                'updated_at' => '2020-08-05 14:51:11',
            ),
            9 => 
            array (
                'id' => 10,
                'key' => 'delete_menus',
                'table_name' => 'menus',
                'created_at' => '2020-08-05 14:51:11',
                'updated_at' => '2020-08-05 14:51:11',
            ),
            10 => 
            array (
                'id' => 11,
                'key' => 'browse_roles',
                'table_name' => 'roles',
                'created_at' => '2020-08-05 14:51:11',
                'updated_at' => '2020-08-05 14:51:11',
            ),
            11 => 
            array (
                'id' => 12,
                'key' => 'read_roles',
                'table_name' => 'roles',
                'created_at' => '2020-08-05 14:51:11',
                'updated_at' => '2020-08-05 14:51:11',
            ),
            12 => 
            array (
                'id' => 13,
                'key' => 'edit_roles',
                'table_name' => 'roles',
                'created_at' => '2020-08-05 14:51:11',
                'updated_at' => '2020-08-05 14:51:11',
            ),
            13 => 
            array (
                'id' => 14,
                'key' => 'add_roles',
                'table_name' => 'roles',
                'created_at' => '2020-08-05 14:51:11',
                'updated_at' => '2020-08-05 14:51:11',
            ),
            14 => 
            array (
                'id' => 15,
                'key' => 'delete_roles',
                'table_name' => 'roles',
                'created_at' => '2020-08-05 14:51:11',
                'updated_at' => '2020-08-05 14:51:11',
            ),
            15 => 
            array (
                'id' => 16,
                'key' => 'browse_users',
                'table_name' => 'users',
                'created_at' => '2020-08-05 14:51:11',
                'updated_at' => '2020-08-05 14:51:11',
            ),
            16 => 
            array (
                'id' => 17,
                'key' => 'read_users',
                'table_name' => 'users',
                'created_at' => '2020-08-05 14:51:11',
                'updated_at' => '2020-08-05 14:51:11',
            ),
            17 => 
            array (
                'id' => 18,
                'key' => 'edit_users',
                'table_name' => 'users',
                'created_at' => '2020-08-05 14:51:11',
                'updated_at' => '2020-08-05 14:51:11',
            ),
            18 => 
            array (
                'id' => 19,
                'key' => 'add_users',
                'table_name' => 'users',
                'created_at' => '2020-08-05 14:51:11',
                'updated_at' => '2020-08-05 14:51:11',
            ),
            19 => 
            array (
                'id' => 20,
                'key' => 'delete_users',
                'table_name' => 'users',
                'created_at' => '2020-08-05 14:51:11',
                'updated_at' => '2020-08-05 14:51:11',
            ),
            20 => 
            array (
                'id' => 21,
                'key' => 'browse_settings',
                'table_name' => 'settings',
                'created_at' => '2020-08-05 14:51:11',
                'updated_at' => '2020-08-05 14:51:11',
            ),
            21 => 
            array (
                'id' => 22,
                'key' => 'read_settings',
                'table_name' => 'settings',
                'created_at' => '2020-08-05 14:51:11',
                'updated_at' => '2020-08-05 14:51:11',
            ),
            22 => 
            array (
                'id' => 23,
                'key' => 'edit_settings',
                'table_name' => 'settings',
                'created_at' => '2020-08-05 14:51:11',
                'updated_at' => '2020-08-05 14:51:11',
            ),
            23 => 
            array (
                'id' => 24,
                'key' => 'add_settings',
                'table_name' => 'settings',
                'created_at' => '2020-08-05 14:51:11',
                'updated_at' => '2020-08-05 14:51:11',
            ),
            24 => 
            array (
                'id' => 25,
                'key' => 'delete_settings',
                'table_name' => 'settings',
                'created_at' => '2020-08-05 14:51:11',
                'updated_at' => '2020-08-05 14:51:11',
            ),
            25 => 
            array (
                'id' => 26,
                'key' => 'browse_hooks',
                'table_name' => NULL,
                'created_at' => '2020-08-05 14:53:01',
                'updated_at' => '2020-08-05 14:53:01',
            ),
            26 => 
            array (
                'id' => 27,
                'key' => 'browse_formations',
                'table_name' => 'formations',
                'created_at' => '2020-08-07 16:53:12',
                'updated_at' => '2020-08-07 16:53:12',
            ),
            27 => 
            array (
                'id' => 28,
                'key' => 'read_formations',
                'table_name' => 'formations',
                'created_at' => '2020-08-07 16:53:12',
                'updated_at' => '2020-08-07 16:53:12',
            ),
            28 => 
            array (
                'id' => 29,
                'key' => 'edit_formations',
                'table_name' => 'formations',
                'created_at' => '2020-08-07 16:53:12',
                'updated_at' => '2020-08-07 16:53:12',
            ),
            29 => 
            array (
                'id' => 30,
                'key' => 'add_formations',
                'table_name' => 'formations',
                'created_at' => '2020-08-07 16:53:12',
                'updated_at' => '2020-08-07 16:53:12',
            ),
            30 => 
            array (
                'id' => 31,
                'key' => 'delete_formations',
                'table_name' => 'formations',
                'created_at' => '2020-08-07 16:53:12',
                'updated_at' => '2020-08-07 16:53:12',
            ),
            31 => 
            array (
                'id' => 32,
                'key' => 'browse_categories',
                'table_name' => 'categories',
                'created_at' => '2020-08-07 16:53:41',
                'updated_at' => '2020-08-07 16:53:41',
            ),
            32 => 
            array (
                'id' => 33,
                'key' => 'read_categories',
                'table_name' => 'categories',
                'created_at' => '2020-08-07 16:53:41',
                'updated_at' => '2020-08-07 16:53:41',
            ),
            33 => 
            array (
                'id' => 34,
                'key' => 'edit_categories',
                'table_name' => 'categories',
                'created_at' => '2020-08-07 16:53:41',
                'updated_at' => '2020-08-07 16:53:41',
            ),
            34 => 
            array (
                'id' => 35,
                'key' => 'add_categories',
                'table_name' => 'categories',
                'created_at' => '2020-08-07 16:53:41',
                'updated_at' => '2020-08-07 16:53:41',
            ),
            35 => 
            array (
                'id' => 36,
                'key' => 'delete_categories',
                'table_name' => 'categories',
                'created_at' => '2020-08-07 16:53:41',
                'updated_at' => '2020-08-07 16:53:41',
            ),
            36 => 
            array (
                'id' => 37,
                'key' => 'browse_faq_categories',
                'table_name' => 'faq_categories',
                'created_at' => '2020-08-07 16:53:52',
                'updated_at' => '2020-08-07 16:53:52',
            ),
            37 => 
            array (
                'id' => 38,
                'key' => 'read_faq_categories',
                'table_name' => 'faq_categories',
                'created_at' => '2020-08-07 16:53:52',
                'updated_at' => '2020-08-07 16:53:52',
            ),
            38 => 
            array (
                'id' => 39,
                'key' => 'edit_faq_categories',
                'table_name' => 'faq_categories',
                'created_at' => '2020-08-07 16:53:52',
                'updated_at' => '2020-08-07 16:53:52',
            ),
            39 => 
            array (
                'id' => 40,
                'key' => 'add_faq_categories',
                'table_name' => 'faq_categories',
                'created_at' => '2020-08-07 16:53:52',
                'updated_at' => '2020-08-07 16:53:52',
            ),
            40 => 
            array (
                'id' => 41,
                'key' => 'delete_faq_categories',
                'table_name' => 'faq_categories',
                'created_at' => '2020-08-07 16:53:52',
                'updated_at' => '2020-08-07 16:53:52',
            ),
            41 => 
            array (
                'id' => 42,
                'key' => 'browse_faqs',
                'table_name' => 'faqs',
                'created_at' => '2020-08-07 16:54:01',
                'updated_at' => '2020-08-07 16:54:01',
            ),
            42 => 
            array (
                'id' => 43,
                'key' => 'read_faqs',
                'table_name' => 'faqs',
                'created_at' => '2020-08-07 16:54:01',
                'updated_at' => '2020-08-07 16:54:01',
            ),
            43 => 
            array (
                'id' => 44,
                'key' => 'edit_faqs',
                'table_name' => 'faqs',
                'created_at' => '2020-08-07 16:54:01',
                'updated_at' => '2020-08-07 16:54:01',
            ),
            44 => 
            array (
                'id' => 45,
                'key' => 'add_faqs',
                'table_name' => 'faqs',
                'created_at' => '2020-08-07 16:54:01',
                'updated_at' => '2020-08-07 16:54:01',
            ),
            45 => 
            array (
                'id' => 46,
                'key' => 'delete_faqs',
                'table_name' => 'faqs',
                'created_at' => '2020-08-07 16:54:01',
                'updated_at' => '2020-08-07 16:54:01',
            ),
            46 => 
            array (
                'id' => 47,
                'key' => 'browse_pages',
                'table_name' => 'pages',
                'created_at' => '2020-08-07 16:54:11',
                'updated_at' => '2020-08-07 16:54:11',
            ),
            47 => 
            array (
                'id' => 48,
                'key' => 'read_pages',
                'table_name' => 'pages',
                'created_at' => '2020-08-07 16:54:11',
                'updated_at' => '2020-08-07 16:54:11',
            ),
            48 => 
            array (
                'id' => 49,
                'key' => 'edit_pages',
                'table_name' => 'pages',
                'created_at' => '2020-08-07 16:54:11',
                'updated_at' => '2020-08-07 16:54:11',
            ),
            49 => 
            array (
                'id' => 50,
                'key' => 'add_pages',
                'table_name' => 'pages',
                'created_at' => '2020-08-07 16:54:11',
                'updated_at' => '2020-08-07 16:54:11',
            ),
            50 => 
            array (
                'id' => 51,
                'key' => 'delete_pages',
                'table_name' => 'pages',
                'created_at' => '2020-08-07 16:54:11',
                'updated_at' => '2020-08-07 16:54:11',
            ),
            51 => 
            array (
                'id' => 52,
                'key' => 'browse_sous_categories',
                'table_name' => 'sous_categories',
                'created_at' => '2020-08-07 16:54:28',
                'updated_at' => '2020-08-07 16:54:28',
            ),
            52 => 
            array (
                'id' => 53,
                'key' => 'read_sous_categories',
                'table_name' => 'sous_categories',
                'created_at' => '2020-08-07 16:54:28',
                'updated_at' => '2020-08-07 16:54:28',
            ),
            53 => 
            array (
                'id' => 54,
                'key' => 'edit_sous_categories',
                'table_name' => 'sous_categories',
                'created_at' => '2020-08-07 16:54:28',
                'updated_at' => '2020-08-07 16:54:28',
            ),
            54 => 
            array (
                'id' => 55,
                'key' => 'add_sous_categories',
                'table_name' => 'sous_categories',
                'created_at' => '2020-08-07 16:54:28',
                'updated_at' => '2020-08-07 16:54:28',
            ),
            55 => 
            array (
                'id' => 56,
                'key' => 'delete_sous_categories',
                'table_name' => 'sous_categories',
                'created_at' => '2020-08-07 16:54:28',
                'updated_at' => '2020-08-07 16:54:28',
            ),
            56 => 
            array (
                'id' => 57,
                'key' => 'browse_temoignages',
                'table_name' => 'temoignages',
                'created_at' => '2020-08-07 16:54:36',
                'updated_at' => '2020-08-07 16:54:36',
            ),
            57 => 
            array (
                'id' => 58,
                'key' => 'read_temoignages',
                'table_name' => 'temoignages',
                'created_at' => '2020-08-07 16:54:36',
                'updated_at' => '2020-08-07 16:54:36',
            ),
            58 => 
            array (
                'id' => 59,
                'key' => 'edit_temoignages',
                'table_name' => 'temoignages',
                'created_at' => '2020-08-07 16:54:36',
                'updated_at' => '2020-08-07 16:54:36',
            ),
            59 => 
            array (
                'id' => 60,
                'key' => 'add_temoignages',
                'table_name' => 'temoignages',
                'created_at' => '2020-08-07 16:54:36',
                'updated_at' => '2020-08-07 16:54:36',
            ),
            60 => 
            array (
                'id' => 61,
                'key' => 'delete_temoignages',
                'table_name' => 'temoignages',
                'created_at' => '2020-08-07 16:54:36',
                'updated_at' => '2020-08-07 16:54:36',
            ),
            61 => 
            array (
                'id' => 62,
                'key' => 'browse_conseils',
                'table_name' => 'conseils',
                'created_at' => '2020-08-07 17:03:07',
                'updated_at' => '2020-08-07 17:03:07',
            ),
            62 => 
            array (
                'id' => 63,
                'key' => 'read_conseils',
                'table_name' => 'conseils',
                'created_at' => '2020-08-07 17:03:07',
                'updated_at' => '2020-08-07 17:03:07',
            ),
            63 => 
            array (
                'id' => 64,
                'key' => 'edit_conseils',
                'table_name' => 'conseils',
                'created_at' => '2020-08-07 17:03:07',
                'updated_at' => '2020-08-07 17:03:07',
            ),
            64 => 
            array (
                'id' => 65,
                'key' => 'add_conseils',
                'table_name' => 'conseils',
                'created_at' => '2020-08-07 17:03:07',
                'updated_at' => '2020-08-07 17:03:07',
            ),
            65 => 
            array (
                'id' => 66,
                'key' => 'delete_conseils',
                'table_name' => 'conseils',
                'created_at' => '2020-08-07 17:03:07',
                'updated_at' => '2020-08-07 17:03:07',
            ),
            66 => 
            array (
                'id' => 67,
                'key' => 'browse_attributes',
                'table_name' => 'attributes',
                'created_at' => '2022-08-12 14:38:26',
                'updated_at' => '2022-08-12 14:38:26',
            ),
            67 => 
            array (
                'id' => 68,
                'key' => 'read_attributes',
                'table_name' => 'attributes',
                'created_at' => '2022-08-12 14:38:26',
                'updated_at' => '2022-08-12 14:38:26',
            ),
            68 => 
            array (
                'id' => 69,
                'key' => 'edit_attributes',
                'table_name' => 'attributes',
                'created_at' => '2022-08-12 14:38:26',
                'updated_at' => '2022-08-12 14:38:26',
            ),
            69 => 
            array (
                'id' => 70,
                'key' => 'add_attributes',
                'table_name' => 'attributes',
                'created_at' => '2022-08-12 14:38:26',
                'updated_at' => '2022-08-12 14:38:26',
            ),
            70 => 
            array (
                'id' => 71,
                'key' => 'delete_attributes',
                'table_name' => 'attributes',
                'created_at' => '2022-08-12 14:38:26',
                'updated_at' => '2022-08-12 14:38:26',
            ),
            71 => 
            array (
                'id' => 72,
                'key' => 'browse_products',
                'table_name' => 'products',
                'created_at' => '2022-08-12 14:38:45',
                'updated_at' => '2022-08-12 14:38:45',
            ),
            72 => 
            array (
                'id' => 73,
                'key' => 'read_products',
                'table_name' => 'products',
                'created_at' => '2022-08-12 14:38:45',
                'updated_at' => '2022-08-12 14:38:45',
            ),
            73 => 
            array (
                'id' => 74,
                'key' => 'edit_products',
                'table_name' => 'products',
                'created_at' => '2022-08-12 14:38:45',
                'updated_at' => '2022-08-12 14:38:45',
            ),
            74 => 
            array (
                'id' => 75,
                'key' => 'add_products',
                'table_name' => 'products',
                'created_at' => '2022-08-12 14:38:45',
                'updated_at' => '2022-08-12 14:38:45',
            ),
            75 => 
            array (
                'id' => 76,
                'key' => 'delete_products',
                'table_name' => 'products',
                'created_at' => '2022-08-12 14:38:45',
                'updated_at' => '2022-08-12 14:38:45',
            ),
            76 => 
            array (
                'id' => 77,
                'key' => 'browse_homepages',
                'table_name' => 'homepages',
                'created_at' => '2022-08-31 15:53:09',
                'updated_at' => '2022-08-31 15:53:09',
            ),
            77 => 
            array (
                'id' => 78,
                'key' => 'read_homepages',
                'table_name' => 'homepages',
                'created_at' => '2022-08-31 15:53:09',
                'updated_at' => '2022-08-31 15:53:09',
            ),
            78 => 
            array (
                'id' => 79,
                'key' => 'edit_homepages',
                'table_name' => 'homepages',
                'created_at' => '2022-08-31 15:53:09',
                'updated_at' => '2022-08-31 15:53:09',
            ),
            79 => 
            array (
                'id' => 80,
                'key' => 'add_homepages',
                'table_name' => 'homepages',
                'created_at' => '2022-08-31 15:53:09',
                'updated_at' => '2022-08-31 15:53:09',
            ),
            80 => 
            array (
                'id' => 81,
                'key' => 'delete_homepages',
                'table_name' => 'homepages',
                'created_at' => '2022-08-31 15:53:09',
                'updated_at' => '2022-08-31 15:53:09',
            ),
        ));
        
        
    }
}