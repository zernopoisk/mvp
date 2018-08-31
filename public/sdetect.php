<?php

$categories = [
    "cereals"=>[
        "alias"=>"cereals",
        "name"=>"зерновые",
        "translit"=>"zernovyye",
    ],
    "oilseeds"=>[
        "alias"=>"oilseeds",
        "name"=>"масличные",
        "translit"=>"maslichnyye",
    ],
    "beans"=>[
        "alias"=>"beans",
        "name"=>"бобовые",
        "translit"=>"bobovyye",
    ],
];

$incoterms = [
    "exw"=>[
        "group"=>"E",
        "alias"=>"exw",
        "abbr"=>"EXW",
        "term_en"=>"ex works",
        "specification"=>"франко-склад, франко-завод: товар забирается покупателем с указанного в договоре склада продавца, оплата экспортных пошлин вменяется в обязанность покупателю",
        "type_of_transport"=>"any",
        "available"=>"yes",
    ],
    "fca"=>[
        "group"=>"F",
        "alias"=>"fca",
        "abbr"=>"FCA",
        "term_en"=>"free carrier",
        "specification"=>"франко-перевозчик: товар доставляется основному перевозчику заказчика к указанному в договоре терминалу отправления, экспортные пошлины уплачивает продавец",
        "type_of_transport"=>"any",
        "available"=>"yes",
    ],
    "fas"=>[
        "group"=>"F",
        "alias"=>"fas",
        "abbr"=>"FAS",
        "term_en"=>"free alongside ship","specification"=>"товар доставляется к судну покупателя, в договоре указывается порт погрузки, перевалку и погрузку оплачивает покупатель",
        "type_of_transport"=>"water",
        "available"=>"yes",
    ],
    "fob"=>[
        "group"=>"F",
        "alias"=>"fob",
        "abbr"=>"FOB",
        "term_en"=>"free on board",
        "specification"=>"товар отгружается на судно покупателя, перевалку оплачивает продавец.",
        "type_of_transport"=>"water",
        "available"=>"yes",
    ],
    "cpt"=>[
        "group"=>"C",
        "alias"=>"cpt",
        "abbr"=>"CPT",
        "term_en"=>"carriage paid to…",
        "specification"=>"товар доставляется основному перевозчику заказчика, основную перевозку до указанного в договоре терминала прибытия оплачивает продавец, расходы по страховке несёт покупатель, импортную растаможку и доставку с терминала прибытия основного перевозчика осуществляет покупатель",
        "type_of_transport"=>"any",
        "available"=>"yes",
    ],
    "cip"=>[
        "group"=>"C",
        "alias"=>"cip",
        "abbr"=>"CIP",
        "term_en"=>"carriage and insurance paid to…",
        "specification"=>"то же, что CPT (а именно: товар доставляется основному перевозчику заказчика, основную перевозку до указанного в договоре терминала прибытия оплачивает продавец, расходы по страховке несёт покупатель, импортную растаможку и доставку с терминала прибытия основного перевозчика осуществляет покупатель), но основная перевозка страхуется продавцом",
        "type_of_transport"=>"any",
        "available"=>"yes",
    ],
    "cfr"=>[
        "group"=>"C",
        "alias"=>"cfr",
        "abbr"=>"CFR",
        "term_en"=>"cost and freight",
        "specification"=>"товар доставляется до указанного в договоре порта назначения покупателя, страховку основной перевозки, разгрузку и перевалку оплачивает покупатель",
        "type_of_transport"=>"water",
        "available"=>"yes",
    ],
    "cif"=>[
        "group"=>"C",
        "alias"=>"cif",
        "abbr"=>"CIF",
        "term_en"=>"Cost, Insurance and Freight",
        "specification"=>"то же, что CFR (а именно: товар доставляется до указанного в договоре порта назначения покупателя, страховку основной перевозки, разгрузку и перевалку оплачивает покупатель), но основную перевозку страхует продавец",
        "type_of_transport"=>"water",
        "available"=>"yes",
    ],
    "dat"=>[
        "group"=>"D",
        "alias"=>"dat",
        "abbr"=>"DAT",
        "term_en"=>"delivered at terminal",
        "specification"=>"поставка до указанного в договоре импортного таможенного терминала оплачена, то есть экспортные платежи и основную перевозку, включая страховку оплачивает продавец, таможенная очистка по импорту осуществляется покупателем",
        "type_of_transport"=>"any",
        "available"=>"yes",
    ],
    "dap"=>[
        "group"=>"D",
        "alias"=>"dap",
        "abbr"=>"DAP",
        "term_en"=>"delivered at place",
        "specification"=>"поставка в место назначения, указанное в договоре, импортные пошлины и местные налоги оплачиваются покупателем",
        "type_of_transport"=>"any",
        "available"=>"yes",
    ],
    "ddp"=>[
        "group"=>"D",
        "alias"=>"ddp",
        "abbr"=>"DDP",
        "term_en"=>"delivered duty paid",
        "specification"=>"товар доставляется заказчику в место назначения, указанное в договоре, очищенный от всех таможенных пошлин и рисков",
        "type_of_transport"=>"any",
        "available"=>"yes",
    ],
];

// 1. Categories.
echo "<strong>1. <u>Categories</u></strong><br>";
echo sprintf("%s: <b>%d</b><br>", "alias", maxSizeDetect($categories, "alias"));
echo sprintf("%s: <b>%d</b><br>", "name", maxSizeDetect($categories, "name"));
echo sprintf("%s: <b>%d</b><br>", "translit", maxSizeDetect($categories, "translit"));
echo "<br><br>";

// 2. Incoterms
echo "<strong>2. <u>Incoterms</u></strong><br>";
echo sprintf("%s: <b>%d</b><br>", "alias", maxSizeDetect($incoterms, "alias"));
echo sprintf("%s: <b>%d</b><br>", "abbr", maxSizeDetect($incoterms, "abbr"));
echo sprintf("%s: <b>%d</b><br>", "term_en", maxSizeDetect($incoterms, "term_en"));
echo sprintf("%s: <b>%d</b><br>", "specification", maxSizeDetect($incoterms, "specification"));
echo sprintf("%s: <b>%d</b><br>", "type_of_transport", maxSizeDetect($incoterms, "type_of_transport"));
echo "<br><br>";

function maxSizeDetect(array $a, $attrName)
{
    $length = [];

    if (count ($a) > 0) {
        foreach ($a as $item) {
            $length[] = mb_strlen($item[$attrName]);
        }
    }

    return max($length);
}