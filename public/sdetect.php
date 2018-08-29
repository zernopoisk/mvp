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

// Categories.
echo "<strong>1. <u>Categories</u></strong><br>";
echo sprintf("%s: <b>%d</b><br>", "alias", maxSizeDetect($categories, "alias"));
echo sprintf("%s: <b>%d</b><br>", "name", maxSizeDetect($categories, "name"));
echo sprintf("%s: <b>%d</b><br>", "translit", maxSizeDetect($categories, "translit"));
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