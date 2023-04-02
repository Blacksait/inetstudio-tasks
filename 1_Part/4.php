<?php
/**
 * №4
 *
 * Изменить в массиве значения и ключи (использовать name => id в качестве пары ключ => значение)
 */

$array = [
    1 => "test1",
    2 => "test2",
    4 => "test4",
    3 => "test3"
];

$reverse = [];

array_walk($array, function ($value, $key) use (&$reverse) {
    $reverse[$value] = $key;
});

print_r($reverse);