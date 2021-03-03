<?php


namespace App;


class Connect
{
    private static $host ="localhost";
    private static $username = "root";
    private static $password = "root";
    private  static $database = "chat";

    public static function db()
    {
      return mysqli_connect(self::$host,self::$username, self::$password, self::$database);
    }


//проверка базы данных на ошибки:
    public static function check()
    {
        // тернарный оператор (запись)
       return !self::db() ? false : true;
    }
}