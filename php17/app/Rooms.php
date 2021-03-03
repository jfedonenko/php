<?php

namespace App;
class Rooms extends  Connect
{
    public static function create($name)
    {
        //делаем проверку, если поле пусто
        if ($name === "") {
            return false;
        }
        //подключаем $SQL
        $SQL = "INSERT INTO `rooms` (`id`, `title`) VALUES (NULL, '$name')";
        //подключаем базу данных  из класса Connect db()
        $room = mysqli_query(self::db(), $SQL);

        //проверяем
        return $room ? true : false;
    }

    public static function addMembers($name, $room_id)
    {
        if ($name === "" || $room_id === "") {
            return false;
        }
            //подключаем $SQL
            $SQL = "INSERT INTO `members` (`id`, `name`, `room_id`) VALUES (NULL,'$name,', '$room_id')";
            //подключаем базу данных  из класса Connect db()
            $member = mysqli_query(self::db(), $SQL);
            //проверяем
            return $member ? true : false;
        }
    }