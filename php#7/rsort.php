<?php
function SortDecending($array) {
    $length = count($array);
    for ($i = 0; $i < $length - 1; $i++) {
        for ($j = $i + 1; $j < $length; $j++) {
            if ($array[$i] < $array[$j]) {
                // Swap elements
                $temp = $array[$i];
                $array[$i] = $array[$j];
                $array[$j] = $temp;
            }
        }
    }
    return $array;
}
$numbers = array(2,20,45,84,7,8);
$sortedNumbers = SortDecending($numbers);
var_dump($sortedNumbers);
