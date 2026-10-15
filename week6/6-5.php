<?php
function printHeader()
{
    echo "<h3>SID:c113181143<h3>";
    echo "<h3>NAME:陳芊昀<h3>";
    echo "<h3>EX05<h3>";
}
function callunc1(closure $closure){
    $closure();
}
function callunc2(closure $callback){
    $callback ();
    }
$hello = function(){
    echo "hellow,world!<br/>";
};
function hi(){
    echo "Hi, World!</br>";
} 
callunc1($hello);