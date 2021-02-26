<?php


class Car  //создаем класс
{
	public $model;
	public $color;
	public $horsepower ;
	public $production_year;


	public function __construct($model, $color, $horsepower, $production_year) // конструктор присваиваем перемнные
	{
	$this->model =$model;
	$this->color =$color;
	$this->horsepower =$horsepower;
	$this->production_year =$production_year;
	}


	public function show() // функция 
	{
		echo "
			<div style='padding: 20px; background: #ccc; font-family:Arial;'> 
				<h2>model: $this->model</h2>
				<h2>color: $this->color</h2>
				<p> Horsepower: $this->horsepower</p>
				<p> year: $this->production_year </p>
			</div>
		";
	}


		
}

