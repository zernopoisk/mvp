<?php

use Illuminate\Database\Seeder;
use App\Category;

class CategoriesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        App\Category::create(['alias'=>'cereals', 'name'=>'зерновые', 'translit'=>'zernovyye']);
        App\Category::create(['alias'=>'oilseeds', 'name'=>'масличные', 'translit'=>'maslichnyye']);
        App\Category::create(['alias'=>'beans', 'name'=>'бобовые', 'translit'=>'bobovyye']);
    }
}
