<?php

use Illuminate\Database\Seeder;

class MenuItemsTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('menu_items')->delete();
        
        \DB::table('menu_items')->insert(array (
            0 => 
            array (
                'id' => 1,
                'menu_id' => 1,
                'title' => 'Tableau de bord',
                'url' => '',
                'target' => '_self',
                'icon_class' => 'voyager-boat',
                'color' => NULL,
                'parent_id' => NULL,
                'order' => 1,
                'created_at' => '2020-08-05 14:51:11',
                'updated_at' => '2020-08-05 14:51:11',
                'route' => 'voyager.dashboard',
                'parameters' => NULL,
            ),
            1 => 
            array (
                'id' => 2,
                'menu_id' => 1,
                'title' => 'Médiathèque',
                'url' => '',
                'target' => '_self',
                'icon_class' => 'voyager-images',
                'color' => NULL,
                'parent_id' => NULL,
                'order' => 4,
                'created_at' => '2020-08-05 14:51:11',
                'updated_at' => '2022-09-21 09:19:14',
                'route' => 'voyager.media.index',
                'parameters' => NULL,
            ),
            2 => 
            array (
                'id' => 3,
                'menu_id' => 1,
                'title' => 'Utilisateurs',
                'url' => '',
                'target' => '_self',
                'icon_class' => 'voyager-person',
                'color' => NULL,
                'parent_id' => NULL,
                'order' => 3,
                'created_at' => '2020-08-05 14:51:11',
                'updated_at' => '2020-08-05 14:51:11',
                'route' => 'voyager.users.index',
                'parameters' => NULL,
            ),
            3 => 
            array (
                'id' => 4,
                'menu_id' => 1,
                'title' => 'Rôles',
                'url' => '',
                'target' => '_self',
                'icon_class' => 'voyager-lock',
                'color' => NULL,
                'parent_id' => NULL,
                'order' => 2,
                'created_at' => '2020-08-05 14:51:11',
                'updated_at' => '2020-08-05 14:51:11',
                'route' => 'voyager.roles.index',
                'parameters' => NULL,
            ),
            4 => 
            array (
                'id' => 5,
                'menu_id' => 1,
                'title' => 'Outils',
                'url' => '',
                'target' => '_self',
                'icon_class' => 'voyager-tools',
                'color' => NULL,
                'parent_id' => NULL,
                'order' => 5,
                'created_at' => '2020-08-05 14:51:11',
                'updated_at' => '2022-09-21 09:19:14',
                'route' => NULL,
                'parameters' => NULL,
            ),
            5 => 
            array (
                'id' => 6,
                'menu_id' => 1,
                'title' => 'Créateur de menus',
                'url' => '',
                'target' => '_self',
                'icon_class' => 'voyager-list',
                'color' => NULL,
                'parent_id' => 5,
                'order' => 1,
                'created_at' => '2020-08-05 14:51:11',
                'updated_at' => '2020-08-07 16:58:50',
                'route' => 'voyager.menus.index',
                'parameters' => NULL,
            ),
            6 => 
            array (
                'id' => 7,
                'menu_id' => 1,
                'title' => 'Base de données',
                'url' => '',
                'target' => '_self',
                'icon_class' => 'voyager-data',
                'color' => NULL,
                'parent_id' => 5,
                'order' => 2,
                'created_at' => '2020-08-05 14:51:11',
                'updated_at' => '2020-08-07 16:58:50',
                'route' => 'voyager.database.index',
                'parameters' => NULL,
            ),
            7 => 
            array (
                'id' => 8,
                'menu_id' => 1,
                'title' => 'Compass',
                'url' => '',
                'target' => '_self',
                'icon_class' => 'voyager-compass',
                'color' => NULL,
                'parent_id' => 5,
                'order' => 3,
                'created_at' => '2020-08-05 14:51:11',
                'updated_at' => '2020-08-07 16:58:50',
                'route' => 'voyager.compass.index',
                'parameters' => NULL,
            ),
            8 => 
            array (
                'id' => 9,
                'menu_id' => 1,
                'title' => 'BREAD',
                'url' => '',
                'target' => '_self',
                'icon_class' => 'voyager-bread',
                'color' => NULL,
                'parent_id' => 5,
                'order' => 4,
                'created_at' => '2020-08-05 14:51:11',
                'updated_at' => '2020-08-07 16:58:50',
                'route' => 'voyager.bread.index',
                'parameters' => NULL,
            ),
            9 => 
            array (
                'id' => 10,
                'menu_id' => 1,
                'title' => 'Paramètres',
                'url' => '',
                'target' => '_self',
                'icon_class' => 'voyager-settings',
                'color' => NULL,
                'parent_id' => NULL,
                'order' => 6,
                'created_at' => '2020-08-05 14:51:11',
                'updated_at' => '2022-09-21 09:19:14',
                'route' => 'voyager.settings.index',
                'parameters' => NULL,
            ),
            10 => 
            array (
                'id' => 12,
                'menu_id' => 1,
                'title' => 'Categories',
                'url' => '',
                'target' => '_self',
                'icon_class' => NULL,
                'color' => NULL,
                'parent_id' => 18,
                'order' => 1,
                'created_at' => '2020-08-07 16:53:41',
                'updated_at' => '2022-09-21 09:18:55',
                'route' => 'voyager.categories.index',
                'parameters' => NULL,
            ),
            11 => 
            array (
                'id' => 14,
                'menu_id' => 1,
                'title' => 'Faqs',
                'url' => '',
                'target' => '_self',
                'icon_class' => NULL,
                'color' => NULL,
                'parent_id' => 18,
                'order' => 3,
                'created_at' => '2020-08-07 16:54:01',
                'updated_at' => '2022-09-21 09:18:55',
                'route' => 'voyager.faqs.index',
                'parameters' => NULL,
            ),
            12 => 
            array (
                'id' => 15,
                'menu_id' => 1,
                'title' => 'Pages',
                'url' => '',
                'target' => '_self',
                'icon_class' => NULL,
                'color' => NULL,
                'parent_id' => 18,
                'order' => 4,
                'created_at' => '2020-08-07 16:54:11',
                'updated_at' => '2022-09-21 09:18:55',
                'route' => 'voyager.pages.index',
                'parameters' => NULL,
            ),
            13 => 
            array (
                'id' => 18,
                'menu_id' => 1,
                'title' => 'Contenu',
                'url' => '',
                'target' => '_self',
                'icon_class' => 'voyager-character',
                'color' => '#000000',
                'parent_id' => NULL,
                'order' => 7,
                'created_at' => '2020-08-07 16:58:33',
                'updated_at' => '2022-09-21 09:19:14',
                'route' => NULL,
                'parameters' => '',
            ),
            14 => 
            array (
                'id' => 24,
                'menu_id' => 2,
                'title' => 'Windows 11',
                'url' => '',
                'target' => '_self',
                'icon_class' => NULL,
                'color' => '#000000',
                'parent_id' => 26,
                'order' => 1,
                'created_at' => '2022-06-09 19:11:56',
                'updated_at' => '2022-08-18 08:24:43',
                'route' => 'produit',
                'parameters' => '{"slug":"windows-11"}',
            ),
            15 => 
            array (
                'id' => 26,
                'menu_id' => 2,
                'title' => 'Produits',
                'url' => '#',
                'target' => '_self',
                'icon_class' => 'list',
                'color' => '#000000',
                'parent_id' => NULL,
                'order' => 2,
                'created_at' => '2022-06-16 08:28:39',
                'updated_at' => '2022-08-12 13:33:44',
                'route' => NULL,
                'parameters' => '',
            ),
            16 => 
            array (
                'id' => 29,
                'menu_id' => 1,
                'title' => 'Réglages généraux',
                'url' => '',
                'target' => '_self',
                'icon_class' => 'voyager-settings',
                'color' => '#000000',
                'parent_id' => NULL,
                'order' => 8,
                'created_at' => '2022-06-16 12:25:21',
                'updated_at' => '2022-09-21 09:19:14',
                'route' => 'voyager.homepages.index',
                'parameters' => 'null',
            ),
            17 => 
            array (
                'id' => 31,
                'menu_id' => 3,
                'title' => 'Mentions légales',
                'url' => '',
                'target' => '_self',
                'icon_class' => NULL,
                'color' => '#000000',
                'parent_id' => NULL,
                'order' => 11,
                'created_at' => '2022-06-16 13:35:43',
                'updated_at' => '2022-06-16 13:35:43',
                'route' => 'page',
                'parameters' => '{
"slug":"mentions-legales"
}',
            ),
            18 => 
            array (
                'id' => 32,
                'menu_id' => 3,
                'title' => 'A propos de nous',
                'url' => '',
                'target' => '_self',
                'icon_class' => NULL,
                'color' => '#000000',
                'parent_id' => NULL,
                'order' => 12,
                'created_at' => '2022-06-16 13:37:25',
                'updated_at' => '2022-06-16 13:37:25',
                'route' => 'page',
                'parameters' => '{
"slug":"a-propos-nous"
}',
            ),
            19 => 
            array (
                'id' => 33,
                'menu_id' => 1,
                'title' => 'Attributs de produits',
                'url' => '',
                'target' => '_self',
                'icon_class' => NULL,
                'color' => NULL,
                'parent_id' => 18,
                'order' => 6,
                'created_at' => '2022-08-12 13:23:50',
                'updated_at' => '2022-09-21 09:18:55',
                'route' => 'voyager.attributes.index',
                'parameters' => NULL,
            ),
            20 => 
            array (
                'id' => 34,
                'menu_id' => 1,
                'title' => 'Produits',
                'url' => '',
                'target' => '_self',
                'icon_class' => NULL,
                'color' => NULL,
                'parent_id' => 18,
                'order' => 5,
                'created_at' => '2022-08-12 13:24:37',
                'updated_at' => '2022-09-21 09:19:14',
                'route' => 'voyager.products.index',
                'parameters' => NULL,
            ),
            21 => 
            array (
                'id' => 35,
                'menu_id' => 2,
                'title' => 'FAQ',
                'url' => 'faqs',
                'target' => '_self',
                'icon_class' => 'help-circle',
                'color' => '#000000',
                'parent_id' => NULL,
                'order' => 5,
                'created_at' => '2022-08-12 13:29:11',
                'updated_at' => '2022-08-18 08:19:13',
                'route' => NULL,
                'parameters' => '',
            ),
            22 => 
            array (
                'id' => 36,
                'menu_id' => 2,
                'title' => 'Tous les produits',
                'url' => '/produits',
                'target' => '_self',
                'icon_class' => 'search',
                'color' => '#000000',
                'parent_id' => NULL,
                'order' => 3,
                'created_at' => '2022-08-12 13:29:27',
                'updated_at' => '2022-08-25 12:40:58',
                'route' => NULL,
                'parameters' => '',
            ),
            23 => 
            array (
                'id' => 37,
                'menu_id' => 2,
                'title' => 'Catégories',
                'url' => '/categories',
                'target' => '_self',
                'icon_class' => 'filter',
                'color' => '#000000',
                'parent_id' => NULL,
                'order' => 4,
                'created_at' => '2022-08-12 13:29:53',
                'updated_at' => '2022-08-18 08:27:01',
                'route' => NULL,
                'parameters' => '',
            ),
            24 => 
            array (
                'id' => 38,
                'menu_id' => 2,
                'title' => 'Accueil',
                'url' => '',
                'target' => '_self',
                'icon_class' => 'home',
                'color' => '#000000',
                'parent_id' => NULL,
                'order' => 1,
                'created_at' => '2022-08-12 13:30:05',
                'updated_at' => '2022-08-12 13:30:08',
                'route' => NULL,
                'parameters' => '',
            ),
            25 => 
            array (
                'id' => 39,
                'menu_id' => 2,
                'title' => 'Comparatif',
                'url' => '/comparatif',
                'target' => '_self',
                'icon_class' => 'award',
                'color' => '#000000',
                'parent_id' => NULL,
                'order' => 13,
                'created_at' => '2022-08-25 12:38:50',
                'updated_at' => '2022-08-25 12:39:15',
                'route' => NULL,
                'parameters' => '',
            ),
        ));
        
        
    }
}