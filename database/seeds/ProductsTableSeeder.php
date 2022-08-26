<?php

use Illuminate\Database\Seeder;

class ProductsTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('products')->delete();
        
        \DB::table('products')->insert(array (
            0 => 
            array (
                'id' => 1,
                'title' => 'Windows 11',
                'description' => '<p>Le dernier syst&egrave;me d\'exploitation de Microsoft. Le dernier syst&egrave;me d\'exploitation de Microsoft. Le dernier syst&egrave;me d\'exploitation de Microsoft. Le dernier syst&egrave;me d\'exploitation de Microsoft. Le dernier syst&egrave;me d\'exploitation de Microsoft. Le dernier syst&egrave;me d\'exploitation de Microsoft. Le dernier syst&egrave;me d\'exploitation de Microsoft. Le dernier syst&egrave;me d\'exploitation de Microsoft. Le dernier syst&egrave;me d\'exploitation de Microsoft. Le dernier syst&egrave;me d\'exploitation de Microsoft. Le dernier syst&egrave;me d\'exploitation de Microsoft.</p>
<p>&nbsp;</p>
<p>Le dernier syst&egrave;me d\'exploitation de Microsoft. Le dernier syst&egrave;me d\'exploitation de Microsoft. Le dernier syst&egrave;me d\'exploitation de Microsoft. Le dernier syst&egrave;me d\'exploitation de Microsoft. Le dernier syst&egrave;me d\'exploitation de Microsoft. Le dernier syst&egrave;me d\'exploitation de Microsoft. Le dernier syst&egrave;me d\'exploitation de Microsoft. Le dernier syst&egrave;me d\'exploitation de Microsoft. Le dernier syst&egrave;me d\'exploitation de Microsoft. Le dernier syst&egrave;me d\'exploitation de Microsoft. Le dernier syst&egrave;me d\'exploitation de Microsoft.Le dernier syst&egrave;me d\'exploitation de Microsoft. Le dernier syst&egrave;me d\'exploitation de Microsoft. Le dernier syst&egrave;me d\'exploitation de Microsoft. Le dernier syst&egrave;me d\'exploitation de Microsoft. Le dernier syst&egrave;me d\'exploitation de Microsoft. Le dernier syst&egrave;me d\'exploitation de Microsoft. Le dernier syst&egrave;me d\'exploitation de Microsoft. Le dernier syst&egrave;me d\'exploitation de Microsoft. Le dernier syst&egrave;me d\'exploitation de Microsoft. Le dernier syst&egrave;me d\'exploitation de Microsoft. Le dernier syst&egrave;me d\'exploitation de Microsoft.</p>
<p>Le dernier syst&egrave;me d\'exploitation de Microsoft. Le dernier syst&egrave;me d\'exploitation de Microsoft. Le dernier syst&egrave;me d\'exploitation de Microsoft. Le dernier syst&egrave;me d\'exploitation de Microsoft. Le dernier syst&egrave;me d\'exploitation de Microsoft. Le dernier syst&egrave;me d\'exploitation de Microsoft. Le dernier syst&egrave;me d\'exploitation de Microsoft. Le dernier syst&egrave;me d\'exploitation de Microsoft. Le dernier syst&egrave;me d\'exploitation de Microsoft. Le dernier syst&egrave;me d\'exploitation de Microsoft. Le dernier syst&egrave;me d\'exploitation de Microsoft.</p>',
                'brand' => 'Microsoft',
                'pros' => '<ul>
<li>Points forts</li>
<li>Points forts. Points forts. Points forts. Points forts.</li>
<li>Points forts. Points forts. Points forts.</li>
<li>Points forts. Points forts.</li>
<li>Points forts. Points forts. Points forts. Points forts.&nbsp;</li>
</ul>',
                'cons' => '<ul>
<li>Points faibles. Points faibles.</li>
<li>Points faibles. Points faibles. Points faibles.</li>
<li>Points faibles.</li>
<li>Points faibles. Points faibles. Points faibles. Points faibles. Points faibles.</li>
</ul>',
                'link' => 'www.microsoft.com',
                'image' => 'products/August2022/7EjYdwuuXscdZFyplsK4.jpg',
                'meta_desc' => 'Description pour les moteurs de recherches.',
                'created_at' => '2022-08-12 13:45:11',
                'updated_at' => '2022-08-19 10:30:59',
                'prix' => 150,
                'francais' => 1,
                'gratuit' => 1,
                'essaiGratuit' => 0,
                'dispoSur' => 'Desktop',
                'langue' => 'Français',
                'category_id' => 3,
                'slug' => 'windows-11',
            ),
            1 => 
            array (
                'id' => 2,
                'title' => 'Windows 12',
                'description' => '<p>Le dernier syst&egrave;me d\'exploitation de Microsoft. Le dernier syst&egrave;me d\'exploitation de Microsoft. Le dernier syst&egrave;me d\'exploitation de Microsoft. Le dernier syst&egrave;me d\'exploitation de Microsoft. Le dernier syst&egrave;me d\'exploitation de Microsoft. Le dernier syst&egrave;me d\'exploitation de Microsoft. Le dernier syst&egrave;me d\'exploitation de Microsoft. Le dernier syst&egrave;me d\'exploitation de Microsoft. Le dernier syst&egrave;me d\'exploitation de Microsoft. Le dernier syst&egrave;me d\'exploitation de Microsoft. Le dernier syst&egrave;me d\'exploitation de Microsoft.</p>
<p>&nbsp;</p>
<p>Le dernier syst&egrave;me d\'exploitation de Microsoft. Le dernier syst&egrave;me d\'exploitation de Microsoft. Le dernier syst&egrave;me d\'exploitation de Microsoft. Le dernier syst&egrave;me d\'exploitation de Microsoft. Le dernier syst&egrave;me d\'exploitation de Microsoft. Le dernier syst&egrave;me d\'exploitation de Microsoft. Le dernier syst&egrave;me d\'exploitation de Microsoft. Le dernier syst&egrave;me d\'exploitation de Microsoft. Le dernier syst&egrave;me d\'exploitation de Microsoft. Le dernier syst&egrave;me d\'exploitation de Microsoft. Le dernier syst&egrave;me d\'exploitation de Microsoft.Le dernier syst&egrave;me d\'exploitation de Microsoft. Le dernier syst&egrave;me d\'exploitation de Microsoft. Le dernier syst&egrave;me d\'exploitation de Microsoft. Le dernier syst&egrave;me d\'exploitation de Microsoft. Le dernier syst&egrave;me d\'exploitation de Microsoft. Le dernier syst&egrave;me d\'exploitation de Microsoft. Le dernier syst&egrave;me d\'exploitation de Microsoft. Le dernier syst&egrave;me d\'exploitation de Microsoft. Le dernier syst&egrave;me d\'exploitation de Microsoft. Le dernier syst&egrave;me d\'exploitation de Microsoft. Le dernier syst&egrave;me d\'exploitation de Microsoft.</p>
<p>Le dernier syst&egrave;me d\'exploitation de Microsoft. Le dernier syst&egrave;me d\'exploitation de Microsoft. Le dernier syst&egrave;me d\'exploitation de Microsoft. Le dernier syst&egrave;me d\'exploitation de Microsoft. Le dernier syst&egrave;me d\'exploitation de Microsoft. Le dernier syst&egrave;me d\'exploitation de Microsoft. Le dernier syst&egrave;me d\'exploitation de Microsoft. Le dernier syst&egrave;me d\'exploitation de Microsoft. Le dernier syst&egrave;me d\'exploitation de Microsoft. Le dernier syst&egrave;me d\'exploitation de Microsoft. Le dernier syst&egrave;me d\'exploitation de Microsoft.</p>',
                'brand' => 'Microsoft',
                'pros' => '<ul>
<li>Points forts</li>
<li>Points forts. Points forts. Points forts. Points forts.</li>
<li>Points forts. Points forts. Points forts.</li>
<li>Points forts. Points forts.</li>
<li>Points forts. Points forts. Points forts. Points forts.&nbsp;</li>
</ul>',
                'cons' => '<ul>
<li>Points faibles. Points faibles.</li>
<li>Points faibles. Points faibles. Points faibles.</li>
<li>Points faibles.</li>
<li>Points faibles. Points faibles. Points faibles. Points faibles. Points faibles.</li>
</ul>',
                'link' => 'www.microsoft.com',
                'image' => 'products/August2022/eJgaEo0NUmlsf0I5MeJC.jpg',
                'meta_desc' => 'Description pour les moteurs de recherches.',
                'created_at' => '2022-08-12 13:45:11',
                'updated_at' => '2022-08-19 10:31:09',
                'prix' => 200,
                'francais' => 1,
                'gratuit' => 0,
                'essaiGratuit' => 0,
                'dispoSur' => 'Android',
                'langue' => 'Français',
                'category_id' => 3,
                'slug' => 'windows-12',
            ),
            2 => 
            array (
                'id' => 3,
                'title' => 'Windows 7',
                'description' => '<p>Le dernier syst&egrave;me d\'exploitation de Microsoft. Le dernier syst&egrave;me d\'exploitation de Microsoft. Le dernier syst&egrave;me d\'exploitation de Microsoft. Le dernier syst&egrave;me d\'exploitation de Microsoft. Le dernier syst&egrave;me d\'exploitation de Microsoft. Le dernier syst&egrave;me d\'exploitation de Microsoft. Le dernier syst&egrave;me d\'exploitation de Microsoft. Le dernier syst&egrave;me d\'exploitation de Microsoft. Le dernier syst&egrave;me d\'exploitation de Microsoft. Le dernier syst&egrave;me d\'exploitation de Microsoft. Le dernier syst&egrave;me d\'exploitation de Microsoft.</p>
<p>&nbsp;</p>
<p>Le dernier syst&egrave;me d\'exploitation de Microsoft. Le dernier syst&egrave;me d\'exploitation de Microsoft. Le dernier syst&egrave;me d\'exploitation de Microsoft. Le dernier syst&egrave;me d\'exploitation de Microsoft. Le dernier syst&egrave;me d\'exploitation de Microsoft. Le dernier syst&egrave;me d\'exploitation de Microsoft. Le dernier syst&egrave;me d\'exploitation de Microsoft. Le dernier syst&egrave;me d\'exploitation de Microsoft. Le dernier syst&egrave;me d\'exploitation de Microsoft. Le dernier syst&egrave;me d\'exploitation de Microsoft. Le dernier syst&egrave;me d\'exploitation de Microsoft.Le dernier syst&egrave;me d\'exploitation de Microsoft. Le dernier syst&egrave;me d\'exploitation de Microsoft. Le dernier syst&egrave;me d\'exploitation de Microsoft. Le dernier syst&egrave;me d\'exploitation de Microsoft. Le dernier syst&egrave;me d\'exploitation de Microsoft. Le dernier syst&egrave;me d\'exploitation de Microsoft. Le dernier syst&egrave;me d\'exploitation de Microsoft. Le dernier syst&egrave;me d\'exploitation de Microsoft. Le dernier syst&egrave;me d\'exploitation de Microsoft. Le dernier syst&egrave;me d\'exploitation de Microsoft. Le dernier syst&egrave;me d\'exploitation de Microsoft.</p>
<p>Le dernier syst&egrave;me d\'exploitation de Microsoft. Le dernier syst&egrave;me d\'exploitation de Microsoft. Le dernier syst&egrave;me d\'exploitation de Microsoft. Le dernier syst&egrave;me d\'exploitation de Microsoft. Le dernier syst&egrave;me d\'exploitation de Microsoft. Le dernier syst&egrave;me d\'exploitation de Microsoft. Le dernier syst&egrave;me d\'exploitation de Microsoft. Le dernier syst&egrave;me d\'exploitation de Microsoft. Le dernier syst&egrave;me d\'exploitation de Microsoft. Le dernier syst&egrave;me d\'exploitation de Microsoft. Le dernier syst&egrave;me d\'exploitation de Microsoft.</p>',
                'brand' => 'Microsoft',
                'pros' => '<ul>
<li>Points forts</li>
<li>Points forts. Points forts. Points forts. Points forts.</li>
<li>Points forts. Points forts. Points forts.</li>
<li>Points forts. Points forts.</li>
<li>Points forts. Points forts. Points forts. Points forts.&nbsp;</li>
</ul>',
                'cons' => '<ul>
<li>Points faibles. Points faibles.</li>
<li>Points faibles. Points faibles. Points faibles.</li>
<li>Points faibles.</li>
<li>Points faibles. Points faibles. Points faibles. Points faibles. Points faibles.</li>
</ul>',
                'link' => 'www.microsoft.com',
                'image' => 'products/August2022/ZA8pzscrTclDzIzVU8A2.jfif',
                'meta_desc' => 'Description pour les moteurs de recherches.',
                'created_at' => '2022-08-12 13:45:11',
                'updated_at' => '2022-08-19 10:31:19',
                'prix' => 250,
                'francais' => 0,
                'gratuit' => 1,
                'essaiGratuit' => 1,
                'dispoSur' => 'iOS',
                'langue' => 'Anglais',
                'category_id' => 1,
                'slug' => 'windows-7',
            ),
            3 => 
            array (
                'id' => 4,
                'title' => 'Windows 10',
                'description' => '<p>Le dernier syst&egrave;me d\'exploitation de Microsoft. Le dernier syst&egrave;me d\'exploitation de Microsoft. Le dernier syst&egrave;me d\'exploitation de Microsoft. Le dernier syst&egrave;me d\'exploitation de Microsoft. Le dernier syst&egrave;me d\'exploitation de Microsoft. Le dernier syst&egrave;me d\'exploitation de Microsoft. Le dernier syst&egrave;me d\'exploitation de Microsoft. Le dernier syst&egrave;me d\'exploitation de Microsoft. Le dernier syst&egrave;me d\'exploitation de Microsoft. Le dernier syst&egrave;me d\'exploitation de Microsoft. Le dernier syst&egrave;me d\'exploitation de Microsoft.</p>
<p>&nbsp;</p>
<p>Le dernier syst&egrave;me d\'exploitation de Microsoft. Le dernier syst&egrave;me d\'exploitation de Microsoft. Le dernier syst&egrave;me d\'exploitation de Microsoft. Le dernier syst&egrave;me d\'exploitation de Microsoft. Le dernier syst&egrave;me d\'exploitation de Microsoft. Le dernier syst&egrave;me d\'exploitation de Microsoft. Le dernier syst&egrave;me d\'exploitation de Microsoft. Le dernier syst&egrave;me d\'exploitation de Microsoft. Le dernier syst&egrave;me d\'exploitation de Microsoft. Le dernier syst&egrave;me d\'exploitation de Microsoft. Le dernier syst&egrave;me d\'exploitation de Microsoft.Le dernier syst&egrave;me d\'exploitation de Microsoft. Le dernier syst&egrave;me d\'exploitation de Microsoft. Le dernier syst&egrave;me d\'exploitation de Microsoft. Le dernier syst&egrave;me d\'exploitation de Microsoft. Le dernier syst&egrave;me d\'exploitation de Microsoft. Le dernier syst&egrave;me d\'exploitation de Microsoft. Le dernier syst&egrave;me d\'exploitation de Microsoft. Le dernier syst&egrave;me d\'exploitation de Microsoft. Le dernier syst&egrave;me d\'exploitation de Microsoft. Le dernier syst&egrave;me d\'exploitation de Microsoft. Le dernier syst&egrave;me d\'exploitation de Microsoft.</p>
<p>Le dernier syst&egrave;me d\'exploitation de Microsoft. Le dernier syst&egrave;me d\'exploitation de Microsoft. Le dernier syst&egrave;me d\'exploitation de Microsoft. Le dernier syst&egrave;me d\'exploitation de Microsoft. Le dernier syst&egrave;me d\'exploitation de Microsoft. Le dernier syst&egrave;me d\'exploitation de Microsoft. Le dernier syst&egrave;me d\'exploitation de Microsoft. Le dernier syst&egrave;me d\'exploitation de Microsoft. Le dernier syst&egrave;me d\'exploitation de Microsoft. Le dernier syst&egrave;me d\'exploitation de Microsoft. Le dernier syst&egrave;me d\'exploitation de Microsoft.</p>',
                'brand' => 'Microsoft',
                'pros' => '<ul>
<li>Points forts</li>
<li>Points forts. Points forts. Points forts. Points forts.</li>
<li>Points forts. Points forts. Points forts.</li>
<li>Points forts. Points forts.</li>
<li>Points forts. Points forts. Points forts. Points forts.&nbsp;</li>
</ul>',
                'cons' => '<ul>
<li>Points faibles. Points faibles.</li>
<li>Points faibles. Points faibles. Points faibles.</li>
<li>Points faibles.</li>
<li>Points faibles. Points faibles. Points faibles. Points faibles. Points faibles.</li>
</ul>',
                'link' => 'www.microsoft.com',
                'image' => 'products/August2022/Nh8RQizZl0UnbVhWxQo5.webp',
                'meta_desc' => 'Description pour les moteurs de recherches.',
                'created_at' => '2022-08-12 13:45:11',
                'updated_at' => '2022-08-19 10:31:30',
                'prix' => 300,
                'francais' => 1,
                'gratuit' => 1,
                'essaiGratuit' => 1,
                'dispoSur' => 'Desktop',
                'langue' => 'Français',
                'category_id' => 3,
                'slug' => 'windows-10',
            ),
            4 => 
            array (
                'id' => 5,
                'title' => 'Windows XP',
                'description' => '<p>Le dernier syst&egrave;me d\'exploitation de Microsoft. Le dernier syst&egrave;me d\'exploitation de Microsoft. Le dernier syst&egrave;me d\'exploitation de Microsoft. Le dernier syst&egrave;me d\'exploitation de Microsoft. Le dernier syst&egrave;me d\'exploitation de Microsoft. Le dernier syst&egrave;me d\'exploitation de Microsoft. Le dernier syst&egrave;me d\'exploitation de Microsoft. Le dernier syst&egrave;me d\'exploitation de Microsoft. Le dernier syst&egrave;me d\'exploitation de Microsoft. Le dernier syst&egrave;me d\'exploitation de Microsoft. Le dernier syst&egrave;me d\'exploitation de Microsoft.</p>
<p>&nbsp;</p>
<p>Le dernier syst&egrave;me d\'exploitation de Microsoft. Le dernier syst&egrave;me d\'exploitation de Microsoft. Le dernier syst&egrave;me d\'exploitation de Microsoft. Le dernier syst&egrave;me d\'exploitation de Microsoft. Le dernier syst&egrave;me d\'exploitation de Microsoft. Le dernier syst&egrave;me d\'exploitation de Microsoft. Le dernier syst&egrave;me d\'exploitation de Microsoft. Le dernier syst&egrave;me d\'exploitation de Microsoft. Le dernier syst&egrave;me d\'exploitation de Microsoft. Le dernier syst&egrave;me d\'exploitation de Microsoft. Le dernier syst&egrave;me d\'exploitation de Microsoft.Le dernier syst&egrave;me d\'exploitation de Microsoft. Le dernier syst&egrave;me d\'exploitation de Microsoft. Le dernier syst&egrave;me d\'exploitation de Microsoft. Le dernier syst&egrave;me d\'exploitation de Microsoft. Le dernier syst&egrave;me d\'exploitation de Microsoft. Le dernier syst&egrave;me d\'exploitation de Microsoft. Le dernier syst&egrave;me d\'exploitation de Microsoft. Le dernier syst&egrave;me d\'exploitation de Microsoft. Le dernier syst&egrave;me d\'exploitation de Microsoft. Le dernier syst&egrave;me d\'exploitation de Microsoft. Le dernier syst&egrave;me d\'exploitation de Microsoft.</p>
<p>Le dernier syst&egrave;me d\'exploitation de Microsoft. Le dernier syst&egrave;me d\'exploitation de Microsoft. Le dernier syst&egrave;me d\'exploitation de Microsoft. Le dernier syst&egrave;me d\'exploitation de Microsoft. Le dernier syst&egrave;me d\'exploitation de Microsoft. Le dernier syst&egrave;me d\'exploitation de Microsoft. Le dernier syst&egrave;me d\'exploitation de Microsoft. Le dernier syst&egrave;me d\'exploitation de Microsoft. Le dernier syst&egrave;me d\'exploitation de Microsoft. Le dernier syst&egrave;me d\'exploitation de Microsoft. Le dernier syst&egrave;me d\'exploitation de Microsoft.</p>',
                'brand' => 'Microsoft',
                'pros' => '<ul>
<li>Points forts</li>
<li>Points forts. Points forts. Points forts. Points forts.</li>
<li>Points forts. Points forts. Points forts.</li>
<li>Points forts. Points forts.</li>
<li>Points forts. Points forts. Points forts. Points forts.&nbsp;</li>
</ul>',
                'cons' => '<ul>
<li>Points faibles. Points faibles.</li>
<li>Points faibles. Points faibles. Points faibles.</li>
<li>Points faibles.</li>
<li>Points faibles. Points faibles. Points faibles. Points faibles. Points faibles.</li>
</ul>',
                'link' => 'www.microsoft.com',
                'image' => 'products/August2022/3HGegLcLgrR4NIE2pVda.jfif',
                'meta_desc' => 'Description pour les moteurs de recherches.',
                'created_at' => '2022-08-12 13:45:11',
                'updated_at' => '2022-08-12 15:14:16',
                'prix' => 350,
                'francais' => 1,
                'gratuit' => 0,
                'essaiGratuit' => 1,
                'dispoSur' => 'iOS',
                'langue' => 'Anglais',
                'category_id' => 4,
                'slug' => 'windows-xp',
            ),
            5 => 
            array (
                'id' => 6,
                'title' => 'Windows Me',
                'description' => '<p>Le dernier syst&egrave;me d\'exploitation de Microsoft. Le dernier syst&egrave;me d\'exploitation de Microsoft. Le dernier syst&egrave;me d\'exploitation de Microsoft. Le dernier syst&egrave;me d\'exploitation de Microsoft. Le dernier syst&egrave;me d\'exploitation de Microsoft. Le dernier syst&egrave;me d\'exploitation de Microsoft. Le dernier syst&egrave;me d\'exploitation de Microsoft. Le dernier syst&egrave;me d\'exploitation de Microsoft. Le dernier syst&egrave;me d\'exploitation de Microsoft. Le dernier syst&egrave;me d\'exploitation de Microsoft. Le dernier syst&egrave;me d\'exploitation de Microsoft.</p>
<p>&nbsp;</p>
<p>Le dernier syst&egrave;me d\'exploitation de Microsoft. Le dernier syst&egrave;me d\'exploitation de Microsoft. Le dernier syst&egrave;me d\'exploitation de Microsoft. Le dernier syst&egrave;me d\'exploitation de Microsoft. Le dernier syst&egrave;me d\'exploitation de Microsoft. Le dernier syst&egrave;me d\'exploitation de Microsoft. Le dernier syst&egrave;me d\'exploitation de Microsoft. Le dernier syst&egrave;me d\'exploitation de Microsoft. Le dernier syst&egrave;me d\'exploitation de Microsoft. Le dernier syst&egrave;me d\'exploitation de Microsoft. Le dernier syst&egrave;me d\'exploitation de Microsoft.Le dernier syst&egrave;me d\'exploitation de Microsoft. Le dernier syst&egrave;me d\'exploitation de Microsoft. Le dernier syst&egrave;me d\'exploitation de Microsoft. Le dernier syst&egrave;me d\'exploitation de Microsoft. Le dernier syst&egrave;me d\'exploitation de Microsoft. Le dernier syst&egrave;me d\'exploitation de Microsoft. Le dernier syst&egrave;me d\'exploitation de Microsoft. Le dernier syst&egrave;me d\'exploitation de Microsoft. Le dernier syst&egrave;me d\'exploitation de Microsoft. Le dernier syst&egrave;me d\'exploitation de Microsoft. Le dernier syst&egrave;me d\'exploitation de Microsoft.</p>
<p>Le dernier syst&egrave;me d\'exploitation de Microsoft. Le dernier syst&egrave;me d\'exploitation de Microsoft. Le dernier syst&egrave;me d\'exploitation de Microsoft. Le dernier syst&egrave;me d\'exploitation de Microsoft. Le dernier syst&egrave;me d\'exploitation de Microsoft. Le dernier syst&egrave;me d\'exploitation de Microsoft. Le dernier syst&egrave;me d\'exploitation de Microsoft. Le dernier syst&egrave;me d\'exploitation de Microsoft. Le dernier syst&egrave;me d\'exploitation de Microsoft. Le dernier syst&egrave;me d\'exploitation de Microsoft. Le dernier syst&egrave;me d\'exploitation de Microsoft.</p>',
                'brand' => 'Microsoft',
                'pros' => '<ul>
<li>Points forts</li>
<li>Points forts. Points forts. Points forts. Points forts.</li>
<li>Points forts. Points forts. Points forts.</li>
<li>Points forts. Points forts.</li>
<li>Points forts. Points forts. Points forts. Points forts.&nbsp;</li>
</ul>',
                'cons' => '<ul>
<li>Points faibles. Points faibles.</li>
<li>Points faibles. Points faibles. Points faibles.</li>
<li>Points faibles.</li>
<li>Points faibles. Points faibles. Points faibles. Points faibles. Points faibles.</li>
</ul>',
                'link' => 'www.microsoft.com',
                'image' => 'products/August2022/Zi5ijGquyBu7vGt33nYS.jpg',
                'meta_desc' => 'Description pour les moteurs de recherches.',
                'created_at' => '2022-08-12 13:45:11',
                'updated_at' => '2022-08-12 15:14:31',
                'prix' => 400,
                'francais' => 0,
                'gratuit' => 1,
                'essaiGratuit' => 1,
                'dispoSur' => 'Android',
                'langue' => 'Français',
                'category_id' => 4,
                'slug' => 'windows-me',
            ),
            6 => 
            array (
                'id' => 7,
                'title' => 'Windows Vista',
                'description' => '<p>Le dernier syst&egrave;me d\'exploitation de Microsoft. Le dernier syst&egrave;me d\'exploitation de Microsoft. Le dernier syst&egrave;me d\'exploitation de Microsoft. Le dernier syst&egrave;me d\'exploitation de Microsoft. Le dernier syst&egrave;me d\'exploitation de Microsoft. Le dernier syst&egrave;me d\'exploitation de Microsoft. Le dernier syst&egrave;me d\'exploitation de Microsoft. Le dernier syst&egrave;me d\'exploitation de Microsoft. Le dernier syst&egrave;me d\'exploitation de Microsoft. Le dernier syst&egrave;me d\'exploitation de Microsoft. Le dernier syst&egrave;me d\'exploitation de Microsoft.</p>
<p>&nbsp;</p>
<p>Le dernier syst&egrave;me d\'exploitation de Microsoft. Le dernier syst&egrave;me d\'exploitation de Microsoft. Le dernier syst&egrave;me d\'exploitation de Microsoft. Le dernier syst&egrave;me d\'exploitation de Microsoft. Le dernier syst&egrave;me d\'exploitation de Microsoft. Le dernier syst&egrave;me d\'exploitation de Microsoft. Le dernier syst&egrave;me d\'exploitation de Microsoft. Le dernier syst&egrave;me d\'exploitation de Microsoft. Le dernier syst&egrave;me d\'exploitation de Microsoft. Le dernier syst&egrave;me d\'exploitation de Microsoft. Le dernier syst&egrave;me d\'exploitation de Microsoft.Le dernier syst&egrave;me d\'exploitation de Microsoft. Le dernier syst&egrave;me d\'exploitation de Microsoft. Le dernier syst&egrave;me d\'exploitation de Microsoft. Le dernier syst&egrave;me d\'exploitation de Microsoft. Le dernier syst&egrave;me d\'exploitation de Microsoft. Le dernier syst&egrave;me d\'exploitation de Microsoft. Le dernier syst&egrave;me d\'exploitation de Microsoft. Le dernier syst&egrave;me d\'exploitation de Microsoft. Le dernier syst&egrave;me d\'exploitation de Microsoft. Le dernier syst&egrave;me d\'exploitation de Microsoft. Le dernier syst&egrave;me d\'exploitation de Microsoft.</p>
<p>Le dernier syst&egrave;me d\'exploitation de Microsoft. Le dernier syst&egrave;me d\'exploitation de Microsoft. Le dernier syst&egrave;me d\'exploitation de Microsoft. Le dernier syst&egrave;me d\'exploitation de Microsoft. Le dernier syst&egrave;me d\'exploitation de Microsoft. Le dernier syst&egrave;me d\'exploitation de Microsoft. Le dernier syst&egrave;me d\'exploitation de Microsoft. Le dernier syst&egrave;me d\'exploitation de Microsoft. Le dernier syst&egrave;me d\'exploitation de Microsoft. Le dernier syst&egrave;me d\'exploitation de Microsoft. Le dernier syst&egrave;me d\'exploitation de Microsoft.</p>',
                'brand' => 'Microsoft',
                'pros' => '<ul>
<li>Points forts</li>
<li>Points forts. Points forts. Points forts. Points forts.</li>
<li>Points forts. Points forts. Points forts.</li>
<li>Points forts. Points forts.</li>
<li>Points forts. Points forts. Points forts. Points forts.&nbsp;</li>
</ul>',
                'cons' => '<ul>
<li>Points faibles. Points faibles.</li>
<li>Points faibles. Points faibles. Points faibles.</li>
<li>Points faibles.</li>
<li>Points faibles. Points faibles. Points faibles. Points faibles. Points faibles.</li>
</ul>',
                'link' => 'www.microsoft.com',
                'image' => 'products/August2022/0PVu23w2w04sW0BmHeSa.webp',
                'meta_desc' => 'Description pour les moteurs de recherches.',
                'created_at' => '2022-08-12 13:45:11',
                'updated_at' => '2022-08-12 15:14:41',
                'prix' => 450,
                'francais' => 1,
                'gratuit' => 1,
                'essaiGratuit' => 0,
                'dispoSur' => 'WebApp',
                'langue' => 'Français',
                'category_id' => 4,
                'slug' => 'windows-vista',
            ),
            7 => 
            array (
                'id' => 8,
                'title' => 'Windows 98',
                'description' => '<p>Le dernier syst&egrave;me d\'exploitation de Microsoft. Le dernier syst&egrave;me d\'exploitation de Microsoft. Le dernier syst&egrave;me d\'exploitation de Microsoft. Le dernier syst&egrave;me d\'exploitation de Microsoft. Le dernier syst&egrave;me d\'exploitation de Microsoft. Le dernier syst&egrave;me d\'exploitation de Microsoft. Le dernier syst&egrave;me d\'exploitation de Microsoft. Le dernier syst&egrave;me d\'exploitation de Microsoft. Le dernier syst&egrave;me d\'exploitation de Microsoft. Le dernier syst&egrave;me d\'exploitation de Microsoft. Le dernier syst&egrave;me d\'exploitation de Microsoft.</p>
<p>&nbsp;</p>
<p>Le dernier syst&egrave;me d\'exploitation de Microsoft. Le dernier syst&egrave;me d\'exploitation de Microsoft. Le dernier syst&egrave;me d\'exploitation de Microsoft. Le dernier syst&egrave;me d\'exploitation de Microsoft. Le dernier syst&egrave;me d\'exploitation de Microsoft. Le dernier syst&egrave;me d\'exploitation de Microsoft. Le dernier syst&egrave;me d\'exploitation de Microsoft. Le dernier syst&egrave;me d\'exploitation de Microsoft. Le dernier syst&egrave;me d\'exploitation de Microsoft. Le dernier syst&egrave;me d\'exploitation de Microsoft. Le dernier syst&egrave;me d\'exploitation de Microsoft.Le dernier syst&egrave;me d\'exploitation de Microsoft. Le dernier syst&egrave;me d\'exploitation de Microsoft. Le dernier syst&egrave;me d\'exploitation de Microsoft. Le dernier syst&egrave;me d\'exploitation de Microsoft. Le dernier syst&egrave;me d\'exploitation de Microsoft. Le dernier syst&egrave;me d\'exploitation de Microsoft. Le dernier syst&egrave;me d\'exploitation de Microsoft. Le dernier syst&egrave;me d\'exploitation de Microsoft. Le dernier syst&egrave;me d\'exploitation de Microsoft. Le dernier syst&egrave;me d\'exploitation de Microsoft. Le dernier syst&egrave;me d\'exploitation de Microsoft.</p>
<p>Le dernier syst&egrave;me d\'exploitation de Microsoft. Le dernier syst&egrave;me d\'exploitation de Microsoft. Le dernier syst&egrave;me d\'exploitation de Microsoft. Le dernier syst&egrave;me d\'exploitation de Microsoft. Le dernier syst&egrave;me d\'exploitation de Microsoft. Le dernier syst&egrave;me d\'exploitation de Microsoft. Le dernier syst&egrave;me d\'exploitation de Microsoft. Le dernier syst&egrave;me d\'exploitation de Microsoft. Le dernier syst&egrave;me d\'exploitation de Microsoft. Le dernier syst&egrave;me d\'exploitation de Microsoft. Le dernier syst&egrave;me d\'exploitation de Microsoft.</p>',
                'brand' => 'Microsoft',
                'pros' => '<ul>
<li>Points forts</li>
<li>Points forts. Points forts. Points forts. Points forts.</li>
<li>Points forts. Points forts. Points forts.</li>
<li>Points forts. Points forts.</li>
<li>Points forts. Points forts. Points forts. Points forts.&nbsp;</li>
</ul>',
                'cons' => '<ul>
<li>Points faibles. Points faibles.</li>
<li>Points faibles. Points faibles. Points faibles.</li>
<li>Points faibles.</li>
<li>Points faibles. Points faibles. Points faibles. Points faibles. Points faibles.</li>
</ul>',
                'link' => 'www.microsoft.com',
                'image' => 'products/August2022/00SA3zyJMNHsJilh1pNo.jpg',
                'meta_desc' => 'Description pour les moteurs de recherches.',
                'created_at' => '2022-08-12 13:45:11',
                'updated_at' => '2022-08-12 15:14:55',
                'prix' => 500,
                'francais' => 1,
                'gratuit' => 0,
                'essaiGratuit' => 1,
                'dispoSur' => 'iOS',
                'langue' => 'Anglais',
                'category_id' => 4,
                'slug' => 'windows-98',
            ),
            8 => 
            array (
                'id' => 9,
                'title' => 'Windows 95',
                'description' => '<p>Le dernier syst&egrave;me d\'exploitation de Microsoft. Le dernier syst&egrave;me d\'exploitation de Microsoft. Le dernier syst&egrave;me d\'exploitation de Microsoft. Le dernier syst&egrave;me d\'exploitation de Microsoft. Le dernier syst&egrave;me d\'exploitation de Microsoft. Le dernier syst&egrave;me d\'exploitation de Microsoft. Le dernier syst&egrave;me d\'exploitation de Microsoft. Le dernier syst&egrave;me d\'exploitation de Microsoft. Le dernier syst&egrave;me d\'exploitation de Microsoft. Le dernier syst&egrave;me d\'exploitation de Microsoft. Le dernier syst&egrave;me d\'exploitation de Microsoft.</p>
<p>&nbsp;</p>
<p>Le dernier syst&egrave;me d\'exploitation de Microsoft. Le dernier syst&egrave;me d\'exploitation de Microsoft. Le dernier syst&egrave;me d\'exploitation de Microsoft. Le dernier syst&egrave;me d\'exploitation de Microsoft. Le dernier syst&egrave;me d\'exploitation de Microsoft. Le dernier syst&egrave;me d\'exploitation de Microsoft. Le dernier syst&egrave;me d\'exploitation de Microsoft. Le dernier syst&egrave;me d\'exploitation de Microsoft. Le dernier syst&egrave;me d\'exploitation de Microsoft. Le dernier syst&egrave;me d\'exploitation de Microsoft. Le dernier syst&egrave;me d\'exploitation de Microsoft.Le dernier syst&egrave;me d\'exploitation de Microsoft. Le dernier syst&egrave;me d\'exploitation de Microsoft. Le dernier syst&egrave;me d\'exploitation de Microsoft. Le dernier syst&egrave;me d\'exploitation de Microsoft. Le dernier syst&egrave;me d\'exploitation de Microsoft. Le dernier syst&egrave;me d\'exploitation de Microsoft. Le dernier syst&egrave;me d\'exploitation de Microsoft. Le dernier syst&egrave;me d\'exploitation de Microsoft. Le dernier syst&egrave;me d\'exploitation de Microsoft. Le dernier syst&egrave;me d\'exploitation de Microsoft. Le dernier syst&egrave;me d\'exploitation de Microsoft.</p>
<p>Le dernier syst&egrave;me d\'exploitation de Microsoft. Le dernier syst&egrave;me d\'exploitation de Microsoft. Le dernier syst&egrave;me d\'exploitation de Microsoft. Le dernier syst&egrave;me d\'exploitation de Microsoft. Le dernier syst&egrave;me d\'exploitation de Microsoft. Le dernier syst&egrave;me d\'exploitation de Microsoft. Le dernier syst&egrave;me d\'exploitation de Microsoft. Le dernier syst&egrave;me d\'exploitation de Microsoft. Le dernier syst&egrave;me d\'exploitation de Microsoft. Le dernier syst&egrave;me d\'exploitation de Microsoft. Le dernier syst&egrave;me d\'exploitation de Microsoft.</p>',
                'brand' => 'Microsoft',
                'pros' => '<ul>
<li>Points forts</li>
<li>Points forts. Points forts. Points forts. Points forts.</li>
<li>Points forts. Points forts. Points forts.</li>
<li>Points forts. Points forts.</li>
<li>Points forts. Points forts. Points forts. Points forts.&nbsp;</li>
</ul>',
                'cons' => '<ul>
<li>Points faibles. Points faibles.</li>
<li>Points faibles. Points faibles. Points faibles.</li>
<li>Points faibles.</li>
<li>Points faibles. Points faibles. Points faibles. Points faibles. Points faibles.</li>
</ul>',
                'link' => 'www.microsoft.com',
                'image' => 'products/August2022/4TMN1lClyzrj5DMKKchc.png',
                'meta_desc' => 'Description pour les moteurs de recherches.',
                'created_at' => '2022-08-12 13:45:11',
                'updated_at' => '2022-08-12 15:15:13',
                'prix' => 550,
                'francais' => 0,
                'gratuit' => 1,
                'essaiGratuit' => 1,
                'dispoSur' => 'Desktop',
                'langue' => 'Français',
                'category_id' => 4,
                'slug' => 'windows-95',
            ),
            9 => 
            array (
                'id' => 10,
                'title' => 'Windows 8',
                'description' => '<p>Le dernier syst&egrave;me d\'exploitation de Microsoft. Le dernier syst&egrave;me d\'exploitation de Microsoft. Le dernier syst&egrave;me d\'exploitation de Microsoft. Le dernier syst&egrave;me d\'exploitation de Microsoft. Le dernier syst&egrave;me d\'exploitation de Microsoft. Le dernier syst&egrave;me d\'exploitation de Microsoft. Le dernier syst&egrave;me d\'exploitation de Microsoft. Le dernier syst&egrave;me d\'exploitation de Microsoft. Le dernier syst&egrave;me d\'exploitation de Microsoft. Le dernier syst&egrave;me d\'exploitation de Microsoft. Le dernier syst&egrave;me d\'exploitation de Microsoft.</p>
<p>&nbsp;</p>
<p>Le dernier syst&egrave;me d\'exploitation de Microsoft. Le dernier syst&egrave;me d\'exploitation de Microsoft. Le dernier syst&egrave;me d\'exploitation de Microsoft. Le dernier syst&egrave;me d\'exploitation de Microsoft. Le dernier syst&egrave;me d\'exploitation de Microsoft. Le dernier syst&egrave;me d\'exploitation de Microsoft. Le dernier syst&egrave;me d\'exploitation de Microsoft. Le dernier syst&egrave;me d\'exploitation de Microsoft. Le dernier syst&egrave;me d\'exploitation de Microsoft. Le dernier syst&egrave;me d\'exploitation de Microsoft. Le dernier syst&egrave;me d\'exploitation de Microsoft.Le dernier syst&egrave;me d\'exploitation de Microsoft. Le dernier syst&egrave;me d\'exploitation de Microsoft. Le dernier syst&egrave;me d\'exploitation de Microsoft. Le dernier syst&egrave;me d\'exploitation de Microsoft. Le dernier syst&egrave;me d\'exploitation de Microsoft. Le dernier syst&egrave;me d\'exploitation de Microsoft. Le dernier syst&egrave;me d\'exploitation de Microsoft. Le dernier syst&egrave;me d\'exploitation de Microsoft. Le dernier syst&egrave;me d\'exploitation de Microsoft. Le dernier syst&egrave;me d\'exploitation de Microsoft. Le dernier syst&egrave;me d\'exploitation de Microsoft.</p>
<p>Le dernier syst&egrave;me d\'exploitation de Microsoft. Le dernier syst&egrave;me d\'exploitation de Microsoft. Le dernier syst&egrave;me d\'exploitation de Microsoft. Le dernier syst&egrave;me d\'exploitation de Microsoft. Le dernier syst&egrave;me d\'exploitation de Microsoft. Le dernier syst&egrave;me d\'exploitation de Microsoft. Le dernier syst&egrave;me d\'exploitation de Microsoft. Le dernier syst&egrave;me d\'exploitation de Microsoft. Le dernier syst&egrave;me d\'exploitation de Microsoft. Le dernier syst&egrave;me d\'exploitation de Microsoft. Le dernier syst&egrave;me d\'exploitation de Microsoft.</p>',
                'brand' => 'Microsoft',
                'pros' => '<ul>
<li>Points forts</li>
<li>Points forts. Points forts. Points forts. Points forts.</li>
<li>Points forts. Points forts. Points forts.</li>
<li>Points forts. Points forts.</li>
<li>Points forts. Points forts. Points forts. Points forts.&nbsp;</li>
</ul>',
                'cons' => '<ul>
<li>Points faibles. Points faibles.</li>
<li>Points faibles. Points faibles. Points faibles.</li>
<li>Points faibles.</li>
<li>Points faibles. Points faibles. Points faibles. Points faibles. Points faibles.</li>
</ul>',
                'link' => 'www.microsoft.com',
                'image' => 'products/August2022/ozCSoNZ54bk6pK2jyLww.png',
                'meta_desc' => 'Description pour les moteurs de recherches.',
                'created_at' => '2022-08-12 13:45:11',
                'updated_at' => '2022-08-18 07:49:39',
                'prix' => 600,
                'francais' => 1,
                'gratuit' => 1,
                'essaiGratuit' => 1,
                'dispoSur' => 'Android',
                'langue' => 'Français',
                'category_id' => 3,
                'slug' => 'windows-8',
            ),
            10 => 
            array (
                'id' => 11,
                'title' => 'Windows OS',
                'description' => '<p>Le dernier syst&egrave;me d\'exploitation de Microsoft. Le dernier syst&egrave;me d\'exploitation de Microsoft. Le dernier syst&egrave;me d\'exploitation de Microsoft. Le dernier syst&egrave;me d\'exploitation de Microsoft. Le dernier syst&egrave;me d\'exploitation de Microsoft. Le dernier syst&egrave;me d\'exploitation de Microsoft. Le dernier syst&egrave;me d\'exploitation de Microsoft. Le dernier syst&egrave;me d\'exploitation de Microsoft. Le dernier syst&egrave;me d\'exploitation de Microsoft. Le dernier syst&egrave;me d\'exploitation de Microsoft. Le dernier syst&egrave;me d\'exploitation de Microsoft.</p>
<p>&nbsp;</p>
<p>Le dernier syst&egrave;me d\'exploitation de Microsoft. Le dernier syst&egrave;me d\'exploitation de Microsoft. Le dernier syst&egrave;me d\'exploitation de Microsoft. Le dernier syst&egrave;me d\'exploitation de Microsoft. Le dernier syst&egrave;me d\'exploitation de Microsoft. Le dernier syst&egrave;me d\'exploitation de Microsoft. Le dernier syst&egrave;me d\'exploitation de Microsoft. Le dernier syst&egrave;me d\'exploitation de Microsoft. Le dernier syst&egrave;me d\'exploitation de Microsoft. Le dernier syst&egrave;me d\'exploitation de Microsoft. Le dernier syst&egrave;me d\'exploitation de Microsoft.Le dernier syst&egrave;me d\'exploitation de Microsoft. Le dernier syst&egrave;me d\'exploitation de Microsoft. Le dernier syst&egrave;me d\'exploitation de Microsoft. Le dernier syst&egrave;me d\'exploitation de Microsoft. Le dernier syst&egrave;me d\'exploitation de Microsoft. Le dernier syst&egrave;me d\'exploitation de Microsoft. Le dernier syst&egrave;me d\'exploitation de Microsoft. Le dernier syst&egrave;me d\'exploitation de Microsoft. Le dernier syst&egrave;me d\'exploitation de Microsoft. Le dernier syst&egrave;me d\'exploitation de Microsoft. Le dernier syst&egrave;me d\'exploitation de Microsoft.</p>
<p>Le dernier syst&egrave;me d\'exploitation de Microsoft. Le dernier syst&egrave;me d\'exploitation de Microsoft. Le dernier syst&egrave;me d\'exploitation de Microsoft. Le dernier syst&egrave;me d\'exploitation de Microsoft. Le dernier syst&egrave;me d\'exploitation de Microsoft. Le dernier syst&egrave;me d\'exploitation de Microsoft. Le dernier syst&egrave;me d\'exploitation de Microsoft. Le dernier syst&egrave;me d\'exploitation de Microsoft. Le dernier syst&egrave;me d\'exploitation de Microsoft. Le dernier syst&egrave;me d\'exploitation de Microsoft. Le dernier syst&egrave;me d\'exploitation de Microsoft.</p>',
                'brand' => 'Microsoft',
                'pros' => '<ul>
<li>Points forts</li>
<li>Points forts. Points forts. Points forts. Points forts.</li>
<li>Points forts. Points forts. Points forts.</li>
<li>Points forts. Points forts.</li>
<li>Points forts. Points forts. Points forts. Points forts.&nbsp;</li>
</ul>',
                'cons' => '<ul>
<li>Points faibles. Points faibles.</li>
<li>Points faibles. Points faibles. Points faibles.</li>
<li>Points faibles.</li>
<li>Points faibles. Points faibles. Points faibles. Points faibles. Points faibles.</li>
</ul>',
                'link' => 'www.microsoft.com',
                'image' => 'products/August2022/6BWD8syo5cEpVCa8ZT2H.jpg',
                'meta_desc' => 'Description pour les moteurs de recherches.',
                'created_at' => '2022-08-12 13:45:11',
                'updated_at' => '2022-08-12 15:15:38',
                'prix' => 650,
                'francais' => 0,
                'gratuit' => 0,
                'essaiGratuit' => 0,
                'dispoSur' => 'iOS',
                'langue' => 'Anglais',
                'category_id' => 4,
                'slug' => 'windows-os',
            ),
            11 => 
            array (
                'id' => 12,
                'title' => 'Windows Server',
                'description' => '<p>Le dernier syst&egrave;me d\'exploitation de Microsoft. Le dernier syst&egrave;me d\'exploitation de Microsoft. Le dernier syst&egrave;me d\'exploitation de Microsoft. Le dernier syst&egrave;me d\'exploitation de Microsoft. Le dernier syst&egrave;me d\'exploitation de Microsoft. Le dernier syst&egrave;me d\'exploitation de Microsoft. Le dernier syst&egrave;me d\'exploitation de Microsoft. Le dernier syst&egrave;me d\'exploitation de Microsoft. Le dernier syst&egrave;me d\'exploitation de Microsoft. Le dernier syst&egrave;me d\'exploitation de Microsoft. Le dernier syst&egrave;me d\'exploitation de Microsoft.</p>
<p>&nbsp;</p>
<p>Le dernier syst&egrave;me d\'exploitation de Microsoft. Le dernier syst&egrave;me d\'exploitation de Microsoft. Le dernier syst&egrave;me d\'exploitation de Microsoft. Le dernier syst&egrave;me d\'exploitation de Microsoft. Le dernier syst&egrave;me d\'exploitation de Microsoft. Le dernier syst&egrave;me d\'exploitation de Microsoft. Le dernier syst&egrave;me d\'exploitation de Microsoft. Le dernier syst&egrave;me d\'exploitation de Microsoft. Le dernier syst&egrave;me d\'exploitation de Microsoft. Le dernier syst&egrave;me d\'exploitation de Microsoft. Le dernier syst&egrave;me d\'exploitation de Microsoft.Le dernier syst&egrave;me d\'exploitation de Microsoft. Le dernier syst&egrave;me d\'exploitation de Microsoft. Le dernier syst&egrave;me d\'exploitation de Microsoft. Le dernier syst&egrave;me d\'exploitation de Microsoft. Le dernier syst&egrave;me d\'exploitation de Microsoft. Le dernier syst&egrave;me d\'exploitation de Microsoft. Le dernier syst&egrave;me d\'exploitation de Microsoft. Le dernier syst&egrave;me d\'exploitation de Microsoft. Le dernier syst&egrave;me d\'exploitation de Microsoft. Le dernier syst&egrave;me d\'exploitation de Microsoft. Le dernier syst&egrave;me d\'exploitation de Microsoft.</p>
<p>Le dernier syst&egrave;me d\'exploitation de Microsoft. Le dernier syst&egrave;me d\'exploitation de Microsoft. Le dernier syst&egrave;me d\'exploitation de Microsoft. Le dernier syst&egrave;me d\'exploitation de Microsoft. Le dernier syst&egrave;me d\'exploitation de Microsoft. Le dernier syst&egrave;me d\'exploitation de Microsoft. Le dernier syst&egrave;me d\'exploitation de Microsoft. Le dernier syst&egrave;me d\'exploitation de Microsoft. Le dernier syst&egrave;me d\'exploitation de Microsoft. Le dernier syst&egrave;me d\'exploitation de Microsoft. Le dernier syst&egrave;me d\'exploitation de Microsoft.</p>',
                'brand' => 'Microsoft',
                'pros' => '<ul>
<li>Points forts</li>
<li>Points forts. Points forts. Points forts. Points forts.</li>
<li>Points forts. Points forts. Points forts.</li>
<li>Points forts. Points forts.</li>
<li>Points forts. Points forts. Points forts. Points forts.&nbsp;</li>
</ul>',
                'cons' => '<ul>
<li>Points faibles. Points faibles.</li>
<li>Points faibles. Points faibles. Points faibles.</li>
<li>Points faibles.</li>
<li>Points faibles. Points faibles. Points faibles. Points faibles. Points faibles.</li>
</ul>',
                'link' => 'www.microsoft.com',
                'image' => 'products/August2022/oIeuXZ4jyoLbMq6sd14E.jpg',
                'meta_desc' => 'Description pour les moteurs de recherches.',
                'created_at' => '2022-08-12 13:45:11',
                'updated_at' => '2022-08-12 15:16:05',
                'prix' => 700,
                'francais' => 1,
                'gratuit' => 1,
                'essaiGratuit' => 1,
                'dispoSur' => 'Desktop',
                'langue' => 'Français',
                'category_id' => 4,
                'slug' => 'windows-server',
            ),
            12 => 
            array (
                'id' => 13,
                'title' => 'Windows phone',
                'description' => '<p>Le dernier syst&egrave;me d\'exploitation de Microsoft. Le dernier syst&egrave;me d\'exploitation de Microsoft. Le dernier syst&egrave;me d\'exploitation de Microsoft. Le dernier syst&egrave;me d\'exploitation de Microsoft. Le dernier syst&egrave;me d\'exploitation de Microsoft. Le dernier syst&egrave;me d\'exploitation de Microsoft. Le dernier syst&egrave;me d\'exploitation de Microsoft. Le dernier syst&egrave;me d\'exploitation de Microsoft. Le dernier syst&egrave;me d\'exploitation de Microsoft. Le dernier syst&egrave;me d\'exploitation de Microsoft. Le dernier syst&egrave;me d\'exploitation de Microsoft.</p>
<p>&nbsp;</p>
<p>Le dernier syst&egrave;me d\'exploitation de Microsoft. Le dernier syst&egrave;me d\'exploitation de Microsoft. Le dernier syst&egrave;me d\'exploitation de Microsoft. Le dernier syst&egrave;me d\'exploitation de Microsoft. Le dernier syst&egrave;me d\'exploitation de Microsoft. Le dernier syst&egrave;me d\'exploitation de Microsoft. Le dernier syst&egrave;me d\'exploitation de Microsoft. Le dernier syst&egrave;me d\'exploitation de Microsoft. Le dernier syst&egrave;me d\'exploitation de Microsoft. Le dernier syst&egrave;me d\'exploitation de Microsoft. Le dernier syst&egrave;me d\'exploitation de Microsoft.Le dernier syst&egrave;me d\'exploitation de Microsoft. Le dernier syst&egrave;me d\'exploitation de Microsoft. Le dernier syst&egrave;me d\'exploitation de Microsoft. Le dernier syst&egrave;me d\'exploitation de Microsoft. Le dernier syst&egrave;me d\'exploitation de Microsoft. Le dernier syst&egrave;me d\'exploitation de Microsoft. Le dernier syst&egrave;me d\'exploitation de Microsoft. Le dernier syst&egrave;me d\'exploitation de Microsoft. Le dernier syst&egrave;me d\'exploitation de Microsoft. Le dernier syst&egrave;me d\'exploitation de Microsoft. Le dernier syst&egrave;me d\'exploitation de Microsoft.</p>
<p>Le dernier syst&egrave;me d\'exploitation de Microsoft. Le dernier syst&egrave;me d\'exploitation de Microsoft. Le dernier syst&egrave;me d\'exploitation de Microsoft. Le dernier syst&egrave;me d\'exploitation de Microsoft. Le dernier syst&egrave;me d\'exploitation de Microsoft. Le dernier syst&egrave;me d\'exploitation de Microsoft. Le dernier syst&egrave;me d\'exploitation de Microsoft. Le dernier syst&egrave;me d\'exploitation de Microsoft. Le dernier syst&egrave;me d\'exploitation de Microsoft. Le dernier syst&egrave;me d\'exploitation de Microsoft. Le dernier syst&egrave;me d\'exploitation de Microsoft.</p>',
                'brand' => 'Microsoft',
                'pros' => '<ul>
<li>Points forts</li>
<li>Points forts. Points forts. Points forts. Points forts.</li>
<li>Points forts. Points forts. Points forts.</li>
<li>Points forts. Points forts.</li>
<li>Points forts. Points forts. Points forts. Points forts.&nbsp;</li>
</ul>',
                'cons' => '<ul>
<li>Points faibles. Points faibles.</li>
<li>Points faibles. Points faibles. Points faibles.</li>
<li>Points faibles.</li>
<li>Points faibles. Points faibles. Points faibles. Points faibles. Points faibles.</li>
</ul>',
                'link' => 'www.microsoft.com',
                'image' => 'products/August2022/esZlsHuQidZ6RkcUTca5.jpg',
                'meta_desc' => 'Description pour les moteurs de recherches.',
                'created_at' => '2022-08-12 13:45:11',
                'updated_at' => '2022-08-12 15:15:50',
                'prix' => 750,
                'francais' => 1,
                'gratuit' => 0,
                'essaiGratuit' => 0,
                'dispoSur' => 'iOS',
                'langue' => 'Français',
                'category_id' => 3,
                'slug' => 'windows-phone',
            ),
        ));
        
        
    }
}