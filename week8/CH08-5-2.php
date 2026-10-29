<?php
require("about_me.php");
echo "w08-ex04" . "<br/>";

if (isset($_COOKIE["ItemName"])) {
    $itemName = $_COOKIE["ItemName"];
    $quantity = $_COOKIE["Quantity"];

    echo "取得itemName的cookie值: " . $itemName . "<br/>";
    echo "取得quantity的cookie值: " . $quantity . "<br/>";

    setcookie("ItemName", "", time() - 3600);
    setcookie("Quantity", "", time() - 3600);
} else {
    $itemName = "white iphone";
    $quantity = "10";
    $date = strtotime("+10 days", time());

    setcookie("ItemName", $itemName, $date);
    setcookie("Quantity", $quantity, $date);

    echo "新增名為ItemName的Cookie: " . $itemName . "<br/>";
    echo "新增名為Quantity的Cookie: " . $quantity . "<br/>";
    echo "Cookie期限:" . date("l F j Y h:i:s A", $date);
}
?>
<BR>
<a href="ch08-5-2.php">Receive Cookie</a>