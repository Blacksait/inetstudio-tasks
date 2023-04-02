<?php
/**
 * №2
 *
 * Отсортировать многомерный массив по ключу (любому)
 */

$array = [
    ["id" => 1, "date" => "12.01.2020", "name" => "test1"],
    ["id" => 2, "date" => "02.05.2020", "name" => "test2"],
    ["id" => 4, "date" => "08.03.2020", "name" => "test4"],
    ["id" => 1, "date" => "22.01.2020", "name" => "test1"],
    ["id" => 2, "date" => "11.11.2021", "name" => "test4"],
    ["id" => 3, "date" => "06.06.2020", "name" => "test3"]
];

$sort_key = 'id';

$sort_ar = [];
array_walk($array, function ($value,$key) use ($sort_key,&$sort_ar){
    if ($sort_key == 'date')
        $sort_ar[$key] = strtotime($value[$sort_key]);
    else
        $sort_ar[$key] = $value[$sort_key];
});

array_multisort($sort_ar, SORT_STRING, $array);
print_r($array);