<?php

use Illuminate\Database\Seeder;
use App\IncotermsGroup;

class IncotermsTablesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $e = App\IncotermsGroup::create(["alias"=>"departure","name"=>"E","term_en"=>"departure","specification"=>"Отгрузка, переход обязательств — у места отправки (англ. departure). Продавец обязан предоставить товары покупателю непосредственно на предприятии-изготовителе, своём складе, таможенная очистка товара продавцом не производится; Продавец не отвечает за погрузку товара на транспортное средство; EXW.","available"=>"yes"]);
        $f = App\IncotermsGroup::create(["alias"=>"main_carriage_unpaid","name"=>"F","term_en"=>"main carriage unpaid","specification"=>"Основная перевозка не оплачена продавцом (англ. main carriage unpaid), переход обязательств у терминалов отправления для основной перевозки. Продавец обязуется поставить товар в распоряжение перевозчика, которого покупатель нанимает самостоятельно; FCA, FAS, FOB.","available"=>"yes"]);
        $c = App\IncotermsGroup::create(["alias"=>"main_carriage_paid","name"=>"C","term_en"=>"main carriage paid","specification"=>"Основная перевозка оплачена продавцом (англ. main carriage paid), переход обязательств — у терминалов прибытия для основной перевозки. Продавец обязан заключить договор перевозки товара, но без принятия на себя риска его случайной гибели или повреждения товара; CFR, CIF, CPT, CIP.","available"=>"yes"]);
        $d = App\IncotermsGroup::create(["alias"=>"arrival","name"=>"D","term_en"=>"arrival","specification"=>"Прибытие, переход обязательств у покупателя, полноценная доставка (англ. arrival). Продавец несёт все расходы по доставке и принимает на себя все риски до момента доставки товара в страну назначения; DAT, DAP, DDP.","available"=>"yes"]);
    }
}
