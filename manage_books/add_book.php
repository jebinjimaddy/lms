<?php

include '../db_connect.php';

function generateID($len) {
    $source = "abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ1234567890_";
    $shuffled = str_shuffle($source);
    return substr($shuffled, 0, $len);
    }

$name = $_GET['name'];
$author = $_GET['author'];
$price = $_GET['price'];
$id = generateID(10);


$var_sql = "INSERT INTO books VALUES (";
$var_sql .= '"'.$id.'",';
$var_sql .= '"'.$name.'",';
$var_sql .= '"'.$author.'",';
$var_sql .= $price.')';
 echo $var_sql;

 $res=$con->query($var_sql);
 echo $res;

?>