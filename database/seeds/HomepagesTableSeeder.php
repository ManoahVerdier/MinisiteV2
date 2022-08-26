<?php

use Illuminate\Database\Seeder;

class HomepagesTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('homepages')->delete();
        
        \DB::table('homepages')->insert(array (
            0 => 
            array (
                'id' => 1,
                'img' => NULL,
                'title' => 'Titre page accueil',
                'titre_site' => 'Titre du site',
                'soustitre_site' => 'Sous titre site',
                'contenu' => '<p style="box-sizing: border-box; font-family: Muli, sans-serif; margin-top: 0px; margin-bottom: 1rem; color: #212529; font-size: 14.4px; background-color: #f8fafc;">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed tempus pretium risus sed scelerisque. Ut quis vulputate augue. Etiam sapien magna, lobortis vel venenatis hendrerit, rutrum ac lectus. Sed consectetur orci ligula, a luctus augue venenatis in. Quisque in felis nec neque congue tempor quis non nisl. Proin nec blandit mi, eu ultrices neque. Fusce elementum accumsan dolor, ut mollis tellus maximus eget. Phasellus vel aliquam lectus. Suspendisse a lorem leo. Donec rutrum, turpis et lobortis luctus, dolor metus faucibus erat, ut lobortis massa ex fringilla justo. Etiam vitae justo leo. Vestibulum aliquam hendrerit neque eget bibendum. Aenean pellentesque nulla nec massa cursus tristique. Mauris vestibulum convallis arcu vel malesuada. Duis dapibus efficitur ullamcorper.</p>
<p style="box-sizing: border-box; font-family: Muli, sans-serif; margin-top: 0px; margin-bottom: 1rem; color: #212529; font-size: 14.4px; background-color: #f8fafc;">Sed id imperdiet mi. Donec commodo, massa quis eleifend mollis, ante enim vestibulum lectus, a aliquam ipsum lorem eu quam. Phasellus commodo sit amet massa in lobortis. Mauris ut porttitor ipsum. In et odio sodales, elementum justo id, scelerisque leo. Sed nec volutpat erat. Mauris metus ipsum, dapibus sed erat eget, commodo dignissim nisi. Nulla quis vehicula lacus. In id magna id magna viverra scelerisque et ullamcorper tortor. In ac dolor tristique, tempor lectus id, ullamcorper mi.</p>
<p style="box-sizing: border-box; font-family: Muli, sans-serif; margin-top: 0px; margin-bottom: 1rem; color: #212529; font-size: 14.4px; background-color: #f8fafc;">Integer gravida vitae ipsum at tristique. Donec at cursus enim. Suspendisse accumsan in metus vel efficitur. Morbi placerat ut magna sit amet dictum. Sed vel lacus dictum, porta tellus nec, ullamcorper nisl. Sed facilisis cursus eros laoreet convallis. Duis eget ipsum accumsan, faucibus felis sit amet, eleifend justo. Praesent sed dictum orci. Quisque vel odio leo.</p>
<p style="box-sizing: border-box; font-family: Muli, sans-serif; margin-top: 0px; margin-bottom: 1rem; color: #212529; font-size: 14.4px; background-color: #f8fafc;">Duis est magna, lobortis ut ultricies consectetur, vulputate sed sapien. Nunc dolor dolor, facilisis id vulputate vel, tempus vel dolor. In pharetra dui massa, vel laoreet eros placerat vitae. In elementum nisi nec pharetra efficitur. Fusce molestie sapien vitae porta consectetur. Suspendisse mauris nisi, molestie consequat dolor sit amet, auctor posuere risus. Aliquam dapibus lectus ex, quis tempor magna tincidunt ac. Curabitur cursus elit quis quam sollicitudin condimentum.</p>
<p style="box-sizing: border-box; font-family: Muli, sans-serif; margin-top: 0px; margin-bottom: 1rem; color: #212529; font-size: 14.4px; background-color: #f8fafc;">Cras vitae massa id dui vestibulum sodales. Mauris sollicitudin interdum ornare. In risus elit, vulputate pellentesque ullamcorper quis, rhoncus a ipsum. Praesent a consequat nunc. Donec dapibus enim in dui suscipit pharetra. Donec nec augue maximus arcu dapibus rutrum eu id tortor. Quisque semper, metus euismod sodales mollis, felis turpis sollicitudin magna, vitae dictum dolor lacus lobortis nunc. Suspendisse varius a lectus non consectetur.</p>',
                'color' => '#5956e9',
                'logo' => 'homepages/June2022/8MUq8Aih1pFuZYaNUPyB.png',
                'footer' => 'Texte du footer, modifiable depuis le back office, de longueur variable et affiché de manière responsive.',
                'created_at' => '2022-06-14 14:13:00',
                'updated_at' => '2022-06-23 07:31:54',
                'metatitle' => 'Titre meta',
                'metadesc' => 'Description meta HP',
                'intro' => '<p style="box-sizing: border-box; font-family: Muli, sans-serif; margin-top: 0px; margin-bottom: 1rem; color: #212529; font-size: 14.4px; background-color: #f8fafc;">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed tempus pretium risus sed scelerisque. Ut quis vulputate augue. Etiam sapien magna, lobortis vel venenatis hendrerit, rutrum ac lectus. Sed consectetur orci ligula, a luctus augue venenatis in. Quisque in felis nec neque congue tempor quis non nisl. Proin nec blandit mi, eu ultrices neque. Fusce elementum accumsan dolor, ut mollis tellus maximus eget. Phasellus vel aliquam lectus. Suspendisse a lorem leo. Donec rutrum, turpis et lobortis luctus, dolor metus faucibus erat, ut lobortis massa ex fringilla justo. Etiam vitae justo leo. Vestibulum aliquam hendrerit neque eget bibendum. Aenean pellentesque nulla nec massa cursus tristique. Mauris vestibulum convallis arcu vel malesuada. Duis dapibus efficitur ullamcorper.</p>
<p style="box-sizing: border-box; font-family: Muli, sans-serif; margin-top: 0px; margin-bottom: 1rem; color: #212529; font-size: 14.4px; background-color: #f8fafc;">Sed id imperdiet mi. Donec commodo, massa quis eleifend mollis, ante enim vestibulum lectus, a aliquam ipsum lorem eu quam. Phasellus commodo sit amet massa in lobortis. Mauris ut porttitor ipsum. In et odio sodales, elementum justo id, scelerisque leo. Sed nec volutpat erat. Mauris metus ipsum, dapibus sed erat eget, commodo dignissim nisi. Nulla quis vehicula lacus. In id magna id magna viverra scelerisque et ullamcorper tortor. In ac dolor tristique, tempor lectus id, ullamcorper mi.</p>
<p style="box-sizing: border-box; font-family: Muli, sans-serif; margin-top: 0px; margin-bottom: 1rem; color: #212529; font-size: 14.4px; background-color: #f8fafc;">Integer gravida vitae ipsum at tristique. Donec at cursus enim. Suspendisse accumsan in metus vel efficitur. Morbi placerat ut magna sit amet dictum. Sed vel lacus dictum, porta tellus nec, ullamcorper nisl. Sed facilisis cursus eros laoreet convallis. Duis eget ipsum accumsan, faucibus felis sit amet, eleifend justo. Praesent sed dictum orci. Quisque vel odio leo.</p>
<p style="box-sizing: border-box; font-family: Muli, sans-serif; margin-top: 0px; margin-bottom: 1rem; color: #212529; font-size: 14.4px; background-color: #f8fafc;">Duis est magna, lobortis ut ultricies consectetur, vulputate sed sapien. Nunc dolor dolor, facilisis id vulputate vel, tempus vel dolor. In pharetra dui massa, vel laoreet eros placerat vitae. In elementum nisi nec pharetra efficitur. Fusce molestie sapien vitae porta consectetur. Suspendisse mauris nisi, molestie consequat dolor sit amet, auctor posuere risus. Aliquam dapibus lectus ex, quis tempor magna tincidunt ac. Curabitur cursus elit quis quam sollicitudin condimentum.</p>
<p style="box-sizing: border-box; font-family: Muli, sans-serif; margin-top: 0px; margin-bottom: 1rem; color: #212529; font-size: 14.4px; background-color: #f8fafc;">Cras vitae massa id dui vestibulum sodales. Mauris sollicitudin interdum ornare. In risus elit, vulputate pellentesque ullamcorper quis, rhoncus a ipsum. Praesent a consequat nunc. Donec dapibus enim in dui suscipit pharetra. Donec nec augue maximus arcu dapibus rutrum eu id tortor. Quisque semper, metus euismod sodales mollis, felis turpis sollicitudin magna, vitae dictum dolor lacus lobortis nunc. Suspendisse varius a lectus non consectetur.</p>',
            ),
        ));
        
        
    }
}