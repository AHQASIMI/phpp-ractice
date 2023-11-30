<?php 
$Astring = "Aliqasimi";
$var_arr = array();
$j = mb_strlen($Astring);
for($k = 0 ;$k < $j; $k++){
    $char = mb_substr($Astring,$k,1);
    $var_arr[$k] = $char;
}
print_r($var_arr);
?>