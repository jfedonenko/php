<?php



$db = mysqli_connect(
    'localhost',
    'root',
    'root',
    'shop-wp'
);
if(!$db){
    die("error BD");
}