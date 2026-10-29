<?php
require("about_me.php");
echo "ch07-1<br/>";

$str1 = "PHP and MySQL Web Programming"; // 字串變數
$str2 = " PHP與MySQL網頁設計範例教本 ";

echo "測試英文字串1: " . $str1 . "\"<br/>";
echo "測試英文字串2: " . $str2 . "\"<br/>";

echo "english string length: " . strlen($str1) . "<br/>";
echo "english string length: " . strlen($str2) . "<br/>";

echo "lower case: " . strtolower($str1) . "<br/>";
echo "upper case: " . strtoupper($str1) . "<br/>";

echo "remove whitespace from both ends: \"" . trim($str2) . "\"<br/>";
echo "remove whitespace from start: \"" . ltrim($str2) . "\"<br/>";
echo "remove whitespace from end: \"" . rtrim($str2) . "\"<br/>";
echo "remove whitespace from end: \"" . chop($str2) . "\"<br/>";