<?php

use Illuminate\Database\Seeder;
use App\LocationRegion;

class LocationRegionsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        App\LocationRegion::create(["alias"=>"Vinnytsia","name"=>"Винницкая","translit"=>"Vinnitskaya","type"=>"region","available"=>"yes"]);
        App\LocationRegion::create(["alias"=>"Odessa","name"=>"Одесская","translit"=>"Odesskaya","type"=>"region","available"=>"yes"]);
        App\LocationRegion::create(["alias"=>"Poltava","name"=>"Полтавская","translit"=>"Poltavskaya","type"=>"region","available"=>"yes"]);
        App\LocationRegion::create(["alias"=>"Rivne","name"=>"Ровенская","translit"=>"Rovenskaya","type"=>"region","available"=>"yes"]);
        App\LocationRegion::create(["alias"=>"Sumy","name"=>"Сумская","translit"=>"Sumskaya","type"=>"region","available"=>"yes"]);
        App\LocationRegion::create(["alias"=>"Ternopil","name"=>"Тернопольская","translit"=>"Ternopolskaya","type"=>"region","available"=>"yes"]);
        App\LocationRegion::create(["alias"=>"Kharkivska","name"=>"Харьковская","translit"=>"Kharkovskaya","type"=>"region","available"=>"yes"]);
        App\LocationRegion::create(["alias"=>"Kherson","name"=>"Херсонская","translit"=>"Khersonskaya","type"=>"region","available"=>"yes"]);
        App\LocationRegion::create(["alias"=>"Khmelnytskyi","name"=>"Хмельницкая","translit"=>"Khmelnitskaya","type"=>"region","available"=>"yes"]);
        App\LocationRegion::create(["alias"=>"Cherkasy","name"=>"Черкасская","translit"=>"Cherkasskaya","type"=>"region","available"=>"yes"]);
        App\LocationRegion::create(["alias"=>"Chernihiv","name"=>"Черниговская","translit"=>"Chernigovskaya","type"=>"region","available"=>"yes"]);
        App\LocationRegion::create(["alias"=>"Mykolayiv","name"=>"Николаевская","translit"=>"Nikolayevskaya","type"=>"region","available"=>"yes"]);
        App\LocationRegion::create(["alias"=>"Lviv","name"=>"Львовская","translit"=>"Lvovskaya","type"=>"region","available"=>"yes"]);
        App\LocationRegion::create(["alias"=>"Luhansk","name"=>"Луганская","translit"=>"Luganskaya","type"=>"region","available"=>"yes"]);
        App\LocationRegion::create(["alias"=>"Volynska","name"=>"Волынская","translit"=>"Volynskaya","type"=>"region","available"=>"yes"]);
        App\LocationRegion::create(["alias"=>"Dnepropetrovsk","name"=>"Днепропетровская","translit"=>"Dnepropetrovskaya","type"=>"region","available"=>"yes"]);
        App\LocationRegion::create(["alias"=>"Donetsk","name"=>"Донецкая","translit"=>"Donetskaya","type"=>"region","available"=>"yes"]);
        App\LocationRegion::create(["alias"=>"Zhitomirskaya","name"=>"Житомирская","translit"=>"Zhitomirskaya","type"=>"region","available"=>"yes"]);
        App\LocationRegion::create(["alias"=>"Transcarpathian","name"=>"Закарпатская","translit"=>"Zakarpatskaya","type"=>"region","available"=>"yes"]);
        App\LocationRegion::create(["alias"=>"Zaporozhye","name"=>"Запорожская","translit"=>"Zaporozhskaya","type"=>"region","available"=>"yes"]);
        App\LocationRegion::create(["alias"=>"Ivano-Frankivsk","name"=>"Ивано-Франковская","translit"=>"Ivano-Frankovskaya","type"=>"region","available"=>"yes"]);
        App\LocationRegion::create(["alias"=>"Kievskaya","name"=>"Киевская","translit"=>"Kiyevskaya","type"=>"region","available"=>"yes"]);
        App\LocationRegion::create(["alias"=>"Kirovograd","name"=>"Кировоградская","translit"=>"Kirovogradskaya","type"=>"region","available"=>"yes"]);
        App\LocationRegion::create(["alias"=>"Chernivtsi","name"=>"Черновицкая","translit"=>"Chernovitskaya","type"=>"region","available"=>"yes"]);
        App\LocationRegion::create(["alias"=>"Kiev","name"=>"Киев","translit"=>"Kiyev","type"=>"city","available"=>"yes"]);
    }
}
