<?php
$weight = 60.0;
$height = 170.0;
echo calc_bmi($weight, $height);

/**
 *
 * @param
 *            weight
 * @param
 *            height
*/
function calc_bmi($weight, $height)
{
    return $weight / (($height / 100) * ($height / 100));
}