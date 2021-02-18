<?php


print_r ($_POST); // ввывод всего массива


// создаем условия 
const LOGIN = "admin";
const PASSWORD = "123456a";

$login =$_POST["login"];
$password = $_POST["password"];

if ($login === LOGIN && $password === PASSWORD){
    echo "Welcome!";
}
else {
    echo "Upsss!";
}


