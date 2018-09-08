<?php

use Illuminate\Database\Seeder;
use App\Classiness;

class ClassinessTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        App\Classiness::create(["alias"=>"first","name"=>"первый","translit"=>"pervyy","number"=>1]);
        App\Classiness::create(["alias"=>"second","name"=>"второй","translit"=>"vtoroy","number"=>2]);
        App\Classiness::create(["alias"=>"third","name"=>"третий","translit"=>"tretiy","number"=>3]);
        App\Classiness::create(["alias"=>"fourth","name"=>"четвертый","translit"=>"chetvertyy","number"=>4]);
        App\Classiness::create(["alias"=>"fifth","name"=>"пятый","translit"=>"pyatyy","number"=>5]);
        App\Classiness::create(["alias"=>"sixth","name"=>"шестой","translit"=>"shestoy","number"=>6]);
    }
}
