<?php
$array = array(1, 2, 3, 4);
$array = [1, 2, 3, 4];
$array = [
    1, 
    'hello', 
    true, 
    NULL, 
    [1, 2, 3]
];
$array = [
    'name' => 'Kaspar',
    'age' => 32
];
$array = [
    6 => 'lol',
    1,
    2,
    3,
    'name' => 'Kaspar',
    'age' => 32,
    4,
    5
];
var_dump($array['name']);
$array = [
    [1, 2, 3],
    [4, 5, 6],
    [7, 8, 9],
];
var_dump($array[2][1]);
$array = [1, 2, 3];
array_push($array, 4);
array_push($array, 5, 6, 7);
$array[] = 8;
var_dump($array);
