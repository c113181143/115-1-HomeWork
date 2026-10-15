<?php
function printHeader()
{
    echo "<h3>SID:c113181143<h3>";
    echo "<h3>NAME:陳芊昀<h3>";
    echo "<h3>EX06<h3>";
}

$weight = 75;
$bmi = function ($height) use ($weight) {
$height = $height / 100.0;
return $weight/$height/$height;
};
$h = 175;
echo "BIM = " . $bmi($h) . "<br/>";