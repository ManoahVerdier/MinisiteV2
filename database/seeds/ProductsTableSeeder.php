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
                'cons' => '<ul>
<li>Points faibles. Points faibles.</li>
<li>Points faibles. Points faibles. Points faibles.</li>
<li>Points faibles.</li>
<li>Points faibles. Points faibles. Points faibles. Points faibles. Points faibles.</li>
</ul>',
                'created_at' => '2022-08-12 13:45:11',
                'description' => '<p>Le dernier syst&egrave;me d\'exploitation de Microsoft. Le dernier syst&egrave;me d\'exploitation de Microsoft. Le dernier syst&egrave;me d\'exploitation de Microsoft. Le dernier syst&egrave;me d\'exploitation de Microsoft. Le dernier syst&egrave;me d\'exploitation de Microsoft. Le dernier syst&egrave;me d\'exploitation de Microsoft. Le dernier syst&egrave;me d\'exploitation de Microsoft. Le dernier syst&egrave;me d\'exploitation de Microsoft. Le dernier syst&egrave;me d\'exploitation de Microsoft. Le dernier syst&egrave;me d\'exploitation de Microsoft. Le dernier syst&egrave;me d\'exploitation de Microsoft.</p>
<p>&nbsp;</p>
<p>Le dernier syst&egrave;me d\'exploitation de Microsoft. Le dernier syst&egrave;me d\'exploitation de Microsoft. Le dernier syst&egrave;me d\'exploitation de Microsoft. Le dernier syst&egrave;me d\'exploitation de Microsoft. Le dernier syst&egrave;me d\'exploitation de Microsoft. Le dernier syst&egrave;me d\'exploitation de Microsoft. Le dernier syst&egrave;me d\'exploitation de Microsoft. Le dernier syst&egrave;me d\'exploitation de Microsoft. Le dernier syst&egrave;me d\'exploitation de Microsoft. Le dernier syst&egrave;me d\'exploitation de Microsoft. Le dernier syst&egrave;me d\'exploitation de Microsoft.Le dernier syst&egrave;me d\'exploitation de Microsoft. Le dernier syst&egrave;me d\'exploitation de Microsoft. Le dernier syst&egrave;me d\'exploitation de Microsoft. Le dernier syst&egrave;me d\'exploitation de Microsoft. Le dernier syst&egrave;me d\'exploitation de Microsoft. Le dernier syst&egrave;me d\'exploitation de Microsoft. Le dernier syst&egrave;me d\'exploitation de Microsoft. Le dernier syst&egrave;me d\'exploitation de Microsoft. Le dernier syst&egrave;me d\'exploitation de Microsoft. Le dernier syst&egrave;me d\'exploitation de Microsoft. Le dernier syst&egrave;me d\'exploitation de Microsoft.</p>
<p>Le dernier syst&egrave;me d\'exploitation de Microsoft. Le dernier syst&egrave;me d\'exploitation de Microsoft. Le dernier syst&egrave;me d\'exploitation de Microsoft. Le dernier syst&egrave;me d\'exploitation de Microsoft. Le dernier syst&egrave;me d\'exploitation de Microsoft. Le dernier syst&egrave;me d\'exploitation de Microsoft. Le dernier syst&egrave;me d\'exploitation de Microsoft. Le dernier syst&egrave;me d\'exploitation de Microsoft. Le dernier syst&egrave;me d\'exploitation de Microsoft. Le dernier syst&egrave;me d\'exploitation de Microsoft. Le dernier syst&egrave;me d\'exploitation de Microsoft.</p>',
                
                'id' => 1,
                
                'link' => 'www.microsoft.com',
                'brand' => 'Microsoft',
                'meta_desc' => 'Description pour les moteurs de recherches.',
                
                'pros' => '<ul>
<li>Points forts</li>
<li>Points forts. Points forts. Points forts. Points forts.</li>
<li>Points forts. Points forts. Points forts.</li>
<li>Points forts. Points forts.</li>
<li>Points forts. Points forts. Points forts. Points forts.&nbsp;</li>
</ul>',
                'title' => 'Windows 11',
                'updated_at' => '2022-08-12 13:52:43',
            
            ),
        ));
        
        
    }
}