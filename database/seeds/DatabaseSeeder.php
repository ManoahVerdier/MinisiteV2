<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $this->call(MenusTableSeeder::class);
        $this->call(MenuItemsTableSeeder::class);
        
        $this->call(DataTypesTableSeeder::class);
        $this->call(DataRowsTableSeeder::class);
        
        
        
        $this->call(PagesTableSeeder::class);
        $this->call(RolesTableSeeder::class);
//        $this->call(PermissionsTableSeeder::class);
//        $this->call(PermissionRoleTableSeeder::class);
        
        
        $this->call(SettingsTableSeeder::class);
        //$this->call(TranslationsTableSeeder::class);
        $this->call(UsersTableSeeder::class);

        $this->call(HomepagesTableSeeder::class);
        $this->call(PageProduitsTableSeeder::class);
        $this->call(FaqsTableSeeder::class);
        $this->call(UserRolesTableSeeder::class);
        $this->call(AttributesTableSeeder::class);
        $this->call(ProductsTableSeeder::class);
        
        $this->call(CategoriesTableSeeder::class);
        $this->call(ReviewsTableSeeder::class);
        $this->call(ContactTableSeeder::class);
        $this->call(MigrationsTableSeeder::class);
        $this->call(SessionsTableSeeder::class);
    }
}
