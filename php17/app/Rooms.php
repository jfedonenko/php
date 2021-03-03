<?php

namespace App;
class Rooms extends  Connect
{
    public static function  create($name)
    {
        //делаем проверку, если поле пусто
        if ($name === ""){
            return false;
        }
        //подключаем $SQL
        $SQL = "INSERT INTO `rooms` (`id`, `title`) VALUES (NULL, '$name')";

        //подключаем базу данных  из класса Connect db()
        $room = mysqli_query(self::db(), $SQL);

        //проверяем
        return $room ? true : false;
    }
}