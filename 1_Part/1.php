<?php
/**
 * №1
 *
 * Выделить уникальные записи (убрать дубли) в отдельный массив.
 * В конечном массиве не должно быть элементов с одинаковым id.
 */

$array = [
    ["id" => 1, "date" => "12.01.2020", "name" => "test1"],
    ["id" => 2, "date" => "02.05.2020", "name" => "test2"],
    ["id" => 4, "date" => "08.03.2020", "name" => "test4"],
    ["id" => 1, "date" => "22.01.2020", "name" => "test1"],
    ["id" => 2, "date" => "11.11.2020", "name" => "test4"],
    ["id" => 3, "date" => "06.06.2020", "name" => "test3"]
];

$unique = [];

array_walk($array, function ($value) use (&$unique) {
    if (!in_array($value['id'], $unique)) {
        $unique[$value['id']] = $value;
    }
});

print_r($unique);