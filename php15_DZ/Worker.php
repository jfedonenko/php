<?php

class Worker //создаем класс
{
    private $model;
	private $hp;
	private $year;


/* создаем статический метод */
	public function __construct($model, $hp, $year) // конструктор присваиваем перемнные
	{
	$this->name =$name;
	$this->email  =$email ;
	$this->profession =$profession;
	}


	public function create() 
	{
        $worker = [
        "name"=>self::name,
        "email"=>self::>email,
        "age"=>self::age,
        "profession"=>self::>profession
        
        ];
	}
    public function all(){

    }
	public function save(){

    }

}
