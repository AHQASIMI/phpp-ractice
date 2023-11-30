<?php 
function explodee($array,$sep)
{
    $counter=0;
    $array_to_str = "";
    foreach($array as $key )
    {

        if($counter<count($array)-1)
           $array_to_str.=$key.$sep;
        else
        $array_to_str.=$key;
         $counter++;
    }
    return $array_to_str;
}
$array = array(4,23,43,46,54,7);
var_dump(explodee($array ,"_"));
?>