<?php


require_once "Car.php";
require_once "Equation.php";
require_once "Worker.php";
$car = new Car (model:"ToyotaCar", color:"Lightgreen", horsepower: 110, production_year:2011 );


//вызываем метод
echo "<pre>";
print_r($car->show());
echo "<pre>";
?>
<form action = "add_car.php" method = "post">
		<p>model</p>
               <select name="model" id="model">
				<option value="model1">Toyota Car</option>
				<option value="model2">Kia Car</option>
                    <option value="model3">Lada Car</option>
			</select>
			
			<p>color</p>
			<select name="color" id="">
				<option value="color1">Lightgreen</option>
				<option value="color2">Red</option>
                    <option value="color3">Blue</option>
			</select>

			<p>horsepower</p>
			<select name="horsepower" id="">
				<option value="">110</option>
				<option value="">160</option>
                    <option value="">200</option>
			</select>

			
			<p>production_year</p>
			<select name="production_year" id="production_year">
				<option value="year1">2011</option>
				<option value="year2">2012</option>
                    <option value="year3">2013</option>
			</select>
			<button type ="submit"> Добавить </button>
	</form>

     <?php

$equation = new Equation (a:3, b:-14, c: -5, );
//вызываем метод
echo "<pre>";
var_dump($equation->discriminant());
echo "<pre>";


 
