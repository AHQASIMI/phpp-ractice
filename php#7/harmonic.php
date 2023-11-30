<?php 
function harmonic($nu)
{
    $sum = 0;
    for($i = 1; $i <= $nu; $i++)
    {
        $sum+=1/$i;
    }
    return $sum; 
}
echo harmonic(9);
