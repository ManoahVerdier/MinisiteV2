<?php

use Illuminate\Database\Seeder;

class PageProduitsTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('page_produits')->delete();
        
        \DB::table('page_produits')->insert(array (
            0 => 
            array (
                'id' => 1,
                'slug' => 'produit-test',
                'description_meta' => 'Description pour la balise meta, non visible',
                'title' => 'Produit TEST',
                'subtitle' => 'Sous titre produit test',
                'lien_amazon' => 'https://www.amazon.fr/Xiaomi-Watch-S1-GL-Black/dp/B09TR5XVML/ref=sr_1_6?keywords=xiaomi+watch+s1&qid=1655212205&s=electronics&sprefix=xiao+mi+wa%2Celectronics%2C60&sr=1-6',
                'img' => 'page-produits/June2022/BbBQdI45uURZkJHuCM1N.jpg',
                'resume' => '<p style="margin: 0px 0px 15px; padding: 0px; text-align: justify; color: #000000; font-family: \'Open Sans\', Arial, sans-serif;">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Phasellus sollicitudin vestibulum leo ut suscipit. Vestibulum in justo vitae augue imperdiet suscipit at nec nibh. Suspendisse quis ante elit. Suspendisse euismod orci ac cursus congue. Sed dictum nisi ut tortor scelerisque, nec feugiat metus accumsan. Praesent gravida ex dui, ut vulputate eros rutrum vel. Sed cursus, turpis in venenatis malesuada, mauris enim ultricies nisl, et blandit nulla ligula eget neque. Vestibulum luctus porttitor velit congue ornare. Sed molestie justo lorem, id feugiat odio sodales eget. Morbi pulvinar ante non nunc ullamcorper, ornare efficitur lacus consectetur. Nam luctus urna eu pretium euismod. Donec porta viverra lorem, dignissim mattis ipsum varius in. Aliquam erat volutpat.</p>
<p style="margin: 0px 0px 15px; padding: 0px; text-align: justify; color: #000000; font-family: \'Open Sans\', Arial, sans-serif;">Donec a lacus justo. Nullam dapibus finibus lectus id tincidunt. Phasellus sit amet est metus. Sed ultricies massa tristique risus varius, vitae sollicitudin magna lobortis. Aenean ornare interdum est, vulputate bibendum est elementum sed. Maecenas commodo rutrum neque, quis suscipit leo accumsan vel. Pellentesque pharetra in nulla eu posuere. Proin a ipsum ullamcorper, lobortis justo quis, vestibulum turpis. Curabitur ornare, lacus in malesuada auctor, risus justo elementum neque, ac ullamcorper dui ante nec ante. Donec a placerat lectus. Sed vel rutrum nisi. Nunc bibendum dolor metus.</p>',
                'stars' => 4,
                'points_forts' => '<p style="margin: 0px 0px 15px; padding: 0px; text-align: justify; color: #000000; font-family: \'Open Sans\', Arial, sans-serif;"><span style="color: #ffffff;">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Phasellus sollicitudin vestibulum leo ut suscipit. Vestibulum in justo vitae augue imperdiet suscipit at nec nibh. Suspendisse quis ante elit. Suspendisse euismod orci ac cursus congue. Sed dictum nisi ut tortor scelerisque, nec feugiat metus accumsan. Praesent gravida ex dui, ut vulputate eros rutrum vel. Sed cursus, turpis in venenatis malesuada, mauris enim ultricies nisl, et blandit nulla ligula eget neque. Vestibulum luctus porttitor velit congue ornare. Sed molestie justo lorem, id feugiat odio sodales eget. Morbi pulvinar ante non nunc ullamcorper, ornare efficitur lacus consectetur. Nam luctus urna eu pretium euismod. Donec porta viverra lorem, dignissim mattis ipsum varius in. Aliquam erat volutpat.</span></p>
<p style="margin: 0px 0px 15px; padding: 0px; text-align: justify; color: #000000; font-family: \'Open Sans\', Arial, sans-serif;"><span style="color: #ffffff;">Donec a lacus justo. Nullam dapibus finibus lectus id tincidunt. Phasellus sit amet est metus. Sed ultricies massa tristique risus varius, vitae sollicitudin magna lobortis. Aenean ornare interdum est, vulputate bibendum est elementum sed. Maecenas commodo rutrum neque, quis suscipit leo accumsan vel. Pellentesque pharetra in nulla eu posuere. Proin a ipsum ullamcorper, lobortis justo quis, vestibulum turpis. Curabitur ornare, lacus in malesuada auctor, risus justo elementum neque, ac ullamcorper dui ante nec ante. Donec a placerat lectus. Sed vel rutrum nisi. Nunc bibendum dolor metus.</span></p>',
                'points_faibles' => '<p style="margin: 0px 0px 15px; padding: 0px; text-align: justify; color: #000000; font-family: \'Open Sans\', Arial, sans-serif;"><span style="color: #000000;">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Phasellus sollicitudin vestibulum leo ut suscipit. Vestibulum in justo vitae augue imperdiet suscipit at nec nibh. Suspendisse quis ante elit. Suspendisse euismod orci ac cursus congue. Sed dictum nisi ut tortor scelerisque, nec feugiat metus accumsan. Praesent gravida ex dui, ut vulputate eros rutrum vel. Sed cursus, turpis in venenatis malesuada, mauris enim ultricies nisl, et blandit nulla ligula eget neque. Vestibulum luctus porttitor velit congue ornare. Sed molestie justo lorem, id feugiat odio sodales eget. Morbi pulvinar ante non nunc ullamcorper, ornare efficitur lacus consectetur. Nam luctus urna eu pretium euismod. Donec porta viverra lorem, dignissim mattis ipsum varius in. Aliquam erat volutpat.</span></p>
<p style="margin: 0px 0px 15px; padding: 0px; text-align: justify; color: #000000; font-family: \'Open Sans\', Arial, sans-serif;"><span style="color: #000000;">Donec a lacus justo. Nullam dapibus finibus lectus id tincidunt. Phasellus sit amet est metus. Sed ultricies massa tristique risus varius, vitae sollicitudin magna lobortis. Aenean ornare interdum est, vulputate bibendum est elementum sed. Maecenas commodo rutrum neque, quis suscipit leo accumsan vel. Pellentesque pharetra in nulla eu posuere. Proin a ipsum ullamcorper, lobortis justo quis, vestibulum turpis. Curabitur ornare, lacus in malesuada auctor, risus justo elementum neque, ac ullamcorper dui ante nec ante. Donec a placerat lectus. Sed vel rutrum nisi. Nunc bibendum dolor metus.</span></p>',
                'caracteristiques' => '<table style="border-collapse: collapse; width: 100%; height: 91px;" border="1">
<tbody>
<tr style="height: 13px;">
<td style="width: 50%; height: 13px;"><strong>Caract&eacute;ristique1</strong></td>
<td style="width: 50%; height: 13px;">Valeur1</td>
</tr>
<tr style="height: 13px;">
<td style="width: 50%; height: 13px;"><strong>Caract&eacute;ristique2</strong></td>
<td style="width: 50%; height: 13px;">Valeur2</td>
</tr>
<tr style="height: 13px;">
<td style="width: 50%; height: 13px;"><strong>Caract&eacute;ristique3</strong></td>
<td style="width: 50%; height: 13px;">Valeur3</td>
</tr>
<tr style="height: 13px;">
<td style="width: 50%; height: 13px;"><strong>Caract&eacute;ristique4</strong></td>
<td style="width: 50%; height: 13px;">Valeur4</td>
</tr>
<tr style="height: 13px;">
<td style="width: 50%; height: 13px;"><strong>Caract&eacute;ristique5</strong></td>
<td style="width: 50%; height: 13px;">Valeur5</td>
</tr>
<tr style="height: 13px;">
<td style="width: 50%; height: 13px;"><strong>Caract&eacute;ristique6</strong></td>
<td style="width: 50%; height: 13px;">Valeur6</td>
</tr>
<tr style="height: 13px;">
<td style="width: 50%; height: 13px;"><strong>Caract&eacute;ristique7</strong></td>
<td style="width: 50%; height: 13px;">Valeur7<br /><br /></td>
</tr>
</tbody>
</table>',
                'presentation' => '<p style="margin: 0px 0px 15px; padding: 0px; text-align: justify; color: #000000; font-family: \'Open Sans\', Arial, sans-serif;">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Phasellus sollicitudin vestibulum leo ut suscipit. Vestibulum in justo vitae augue imperdiet suscipit at nec nibh. Suspendisse quis ante elit. Suspendisse euismod orci ac cursus congue. Sed dictum nisi ut tortor scelerisque, nec feugiat metus accumsan. Praesent gravida ex dui, ut vulputate eros rutrum vel. Sed cursus, turpis in venenatis malesuada, mauris enim ultricies nisl, et blandit nulla ligula eget neque. Vestibulum luctus porttitor velit congue ornare. Sed molestie justo lorem, id feugiat odio sodales eget. Morbi pulvinar ante non nunc ullamcorper, ornare efficitur lacus consectetur. Nam luctus urna eu pretium euismod. Donec porta viverra lorem, dignissim mattis ipsum varius in. Aliquam erat volutpat.</p>
<p style="margin: 0px 0px 15px; padding: 0px; text-align: justify; color: #000000; font-family: \'Open Sans\', Arial, sans-serif;">Donec a lacus justo. Nullam dapibus finibus lectus id tincidunt. Phasellus sit amet est metus. Sed ultricies massa tristique risus varius, vitae sollicitudin magna lobortis. Aenean ornare interdum est, vulputate bibendum est elementum sed. Maecenas commodo rutrum neque, quis suscipit leo accumsan vel. Pellentesque pharetra in nulla eu posuere. Proin a ipsum ullamcorper, lobortis justo quis, vestibulum turpis. Curabitur ornare, lacus in malesuada auctor, risus justo elementum neque, ac ullamcorper dui ante nec ante. Donec a placerat lectus. Sed vel rutrum nisi. Nunc bibendum dolor metus.</p>',
                'conclusion' => '<p style="margin: 0px 0px 15px; padding: 0px; text-align: justify; color: #000000; font-family: \'Open Sans\', Arial, sans-serif;">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Phasellus sollicitudin vestibulum leo ut suscipit. Vestibulum in justo vitae augue imperdiet suscipit at nec nibh. Suspendisse quis ante elit. Suspendisse euismod orci ac cursus congue. Sed dictum nisi ut tortor scelerisque, nec feugiat metus accumsan. Praesent gravida ex dui, ut vulputate eros rutrum vel. Sed cursus, turpis in venenatis malesuada, mauris enim ultricies nisl, et blandit nulla ligula eget neque. Vestibulum luctus porttitor velit congue ornare. Sed molestie justo lorem, id feugiat odio sodales eget. Morbi pulvinar ante non nunc ullamcorper, ornare efficitur lacus consectetur. Nam luctus urna eu pretium euismod. Donec porta viverra lorem, dignissim mattis ipsum varius in. Aliquam erat volutpat.</p>
<p style="margin: 0px 0px 15px; padding: 0px; text-align: justify; color: #000000; font-family: \'Open Sans\', Arial, sans-serif;">Donec a lacus justo. Nullam dapibus finibus lectus id tincidunt. Phasellus sit amet est metus. Sed ultricies massa tristique risus varius, vitae sollicitudin magna lobortis. Aenean ornare interdum est, vulputate bibendum est elementum sed. Maecenas commodo rutrum neque, quis suscipit leo accumsan vel. Pellentesque pharetra in nulla eu posuere. Proin a ipsum ullamcorper, lobortis justo quis, vestibulum turpis. Curabitur ornare, lacus in malesuada auctor, risus justo elementum neque, ac ullamcorper dui ante nec ante. Donec a placerat lectus. Sed vel rutrum nisi. Nunc bibendum dolor metus.</p>',
                'accordion_text' => NULL,
                'excerpt' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Phasellus sollicitudin vestibulum leo ut suscipit. Vestibulum in justo vitae augue imperdiet suscipit at nec nibh. Suspendisse quis ante elit. Suspendisse euismod orci ac cursus congue. Sed dictum nisi ut tortor scelerisque, nec feugiat metus accumsan. Praesent gravida ex dui, ut vulputate eros rutrum vel. Sed cursus, turpis in venenatis malesuada, mauris enim ultricies nisl, et blandit nulla ligula eget neque. Vestibulum luctus porttitor velit congue ornare. Sed molestie justo lorem, id feugiat odio sodales eget. Morbi pulvinar ante non nunc ullamcorper, ornare efficitur lacus consectetur. Nam luctus urna eu pretium euismod. Donec porta viverra lorem, dignissim mattis ipsum varius in. Aliquam erat volutpat.',
                'description_produit' => NULL,
                'created_at' => '2022-06-16 12:06:00',
                'updated_at' => '2022-06-23 07:25:43',
            ),
        ));
        
        
    }
}