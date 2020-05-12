<?php
    function addItemToArray($array, $item){
        $array[] = $item;
        return $array;
    }

    function addItemToArray2(&$array, $item){
        $array[] = $item;
    }

    $oldArray = [
        'value1',
        'value2'
    ];

    $newArray = addItemToArray($oldArray, 'item');

    addItemToArray2($oldArray, 'item2');

    var_dump($newArray);

    var_dump($oldArray);
?>