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

$products = [
    "corn"=>[
        "alias"=>"corn",
        "name"=>"кукуруза",
        "translit"=>"kukuruza",
        "category_id"=>"cereals",
        "available"=>"yes",
    ],
    "wheat"=>[
        "alias"=>"wheat",
        "name"=>"пшеница",
        "translit"=>"pshenitsa",
        "category_id"=>"cereals",
        "available"=>"yes",
    ],
    "barley"=>[
        "alias"=>"barley",
        "name"=>"ячмень",
        "translit"=>"yachmen",
        "category_id"=>"cereals",
        "available"=>"yes",
    ],
    "buckwheat"=>[
        "alias"=>"buckwheat",
        "name"=>"гречиха",
        "translit"=>"grechikha",
        "category_id"=>"cereals",
        "available"=>"yes",
    ],
    "millet"=>[
        "alias"=>"millet",
        "name"=>"просо",
        "translit"=>"proso",
        "category_id"=>"cereals",
        "available"=>"yes",
    ],
    "rye"=>[
        "alias"=>"rye",
        "name"=>"рожь",
        "translit"=>"rozh",
        "category_id"=>"cereals",
        "available"=>"yes",
    ],
    "oats"=>[
        "alias"=>"oats",
        "name"=>"овес",
        "translit"=>"oves",
        "category_id"=>"cereals",
        "available"=>"yes",
    ],
    "sunflower"=>[
        "alias"=>"sunflower",
        "name"=>"подсолнечник",
        "translit"=>"podsolnechnik",
        "category_id"=>"oilseeds",
        "available"=>"yes",
    ],
    "rape"=>[
        "alias"=>"rape",
        "name"=>"рапс",
        "translit"=>"raps",
        "category_id"=>"oilseeds",
        "available"=>"yes",
    ],
    "soybean"=>[
        "alias"=>"soybean",
        "name"=>"соя",
        "translit"=>"soya",
        "category_id"=>"beans",
        "available"=>"yes",
    ],
    "peas"=>[
        "alias"=>"peas",
        "name"=>"горох",
        "translit"=>"gorokh",
        "category_id"=>"beans",
        "available"=>"yes",
    ],
];

// 1. Categories.
echo "<strong>1. <u>Categories</u></strong><br>";
echo sprintf("%s: <b>%d</b><br>", "alias", maxSizeDetect($categories, "alias"));
echo sprintf("%s: <b>%d</b><br>", "name", maxSizeDetect($categories, "name"));
echo sprintf("%s: <b>%d</b><br>", "translit", maxSizeDetect($categories, "translit"));
echo "<br><br>";

// 2. Products.
echo "<strong>2. <u>Products</u></strong><br>";
echo sprintf("%s: <b>%d</b><br>", "alias", maxSizeDetect($products, "alias"));
echo sprintf("%s: <b>%d</b><br>", "name", maxSizeDetect($products, "name"));
echo sprintf("%s: <b>%d</b><br>", "translit", maxSizeDetect($products, "translit"));
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