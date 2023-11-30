<?php
function SortAscending($array) {
    $length = count($array);
    for ($i = 0; $i < $length - 1; $i++) {
        for ($j = $i + 1; $j < $length; $j++) {
            if ($array[$i] > $array[$j]) {
                // Swap elements
                $temp = $array[$i];
                $array[$i] = $array[$j];
                $array[$j] = $temp;
            }
        }
    }
    return $array;
}
$numbers = array(17, 34,56, 6, 1,3 ,9);
$sortedNumbers = SortAscending($numbers);
print_r($sortedNumbers);
?>