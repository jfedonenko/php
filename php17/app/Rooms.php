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
        $SQL = "INSERT INTO `members` (`id`, `name`, `room_id`) VALUES (NULL,'$name', '$room_id')";

        $connect = self::db();
        //подключаем базу данных  из класса Connect db()
            $member = mysqli_query($connect , $SQL);
            //проверяем
            return $member ? mysqli_insert_id($connect) : false;
        }
        public static function clickMemderRoom($room_id, $member_id)
            {

         $room = mysqli_fetch_assoc(mysqli_query(self::db(),"SELECT * FROM `rooms` WHERE 'id' = $room_id"));

            if(is_null($room)){
            return false;
            }

            $member = mysqli_fetch_assoc(mysqli_query(self::db(),"SELECT * FROM `members` WHERE 'id' = $member_id"));
                if(is_null($member)){
                return false;
            }
                if ((int)$member["room_id"] !==(int)$room["id"]){
                    return false;
                }
        return true;
        }
    }
