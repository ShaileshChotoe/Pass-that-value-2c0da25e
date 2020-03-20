<?php

$boekenkast = [];

addItemToArray($boekenkast, 'horror-boek');

var_dump($boekenkast);

function addItemToArray($array, $item) {
    array_push($array, $item);
    return $array;
}

addItemToArray2($boekenkast, 'sneeuw-witje');

var_dump($boekenkast);

function addItemToArray2(&$array, $item) {
    array_push($array, $item);
}

?>