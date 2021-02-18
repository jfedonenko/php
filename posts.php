<?php

print_r ($_GET);


$id = $_GET["id"];
echo $id;

$posts =[
    [
        "id" => 1,
        "title" => " Title 1 ",
        "body" => " Body 1 ",
        "pablic" => true
    ],
    [
        "id" => 2,
        "title" => " Title 2 ",
        "body" => " Body 2 ",
        "pablic" => true
    ],
    [
        "id" => 3,
        "title" => " Title 3",
        "body" => " Body 3",
        "pablic" => true
    ],
    [
        "id" => 4,
        "title" => " Title 4 ",
        "body" => " Body 4 ",
        "pablic" => true
    ]
];
//    /php/posts.php 
// выводим в строку /php/posts.php?title=hello!&desc=123

// /posts.php?title=hello!&desc=123


// выведем пост в url  id=1

// /posts.php?id=1

$id = $_GET["id"]; 
foreach ($posts as $posts){
    if ($posts["id"] == $id){
        echo $posts["title"];
        break;
    }
}