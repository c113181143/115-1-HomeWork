<?php
function printHeader()
{
    echo "<h3>SID:c113181143<h3>";
    echo "<h3>NAME:陳芊昀<h3>";
    echo "<h3>EX02<h3>";
}

function rateExchange($amount, $rate)
{
    $result = $amount * $rate;
    return $result;
}

$rate = rateExchange(1000, 32.5);
printHeader();

echo "<hr>Money:</hr>" . $rate;
?>