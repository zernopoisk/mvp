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
        $this->call([
            // UsersTableSeeder::class
            CategoriesTableSeeder::class,
            IncotermsTablesSeeder::class,
            PaymentTablesSeeder::class,
            PickupTableSeeder::class,
            SellerTypesTableSeeder::class,
            OffersStatusesTableSeeder::class,
            ClassinessTableSeeder::class,
            LocationRegionsTableSeeder::class,
        ]);
    }
}
