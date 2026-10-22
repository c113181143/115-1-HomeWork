<?php
include"about_me.php";
echo"ex03<br/>";

$arr = array(
    "color" => "red",
    "name" => "陳芊昀",
    "shape" => "circle",
    100
);

$arr["type"] = "PHP";
unset($arr["type"]);

foreach ($arr as $key => $value) {
    echo "$key=>$value";
}
echo" <BR/>";
print_r($arr);