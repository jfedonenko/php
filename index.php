<?php   
// 1й блок
$name = ' Juli';
define('GREETING','Здравствуйте, ');


echo GREETING . $name; 


// 2й блок
// Первый массив
$profile = [
	'name' => 'Julia',
	'age'=> 40,
	'live' => 'Ukr' 
];

print_r($profile); 

// Второй массив 
$skils = [
	'children' => ['Miha', 'Alina'],
	'animals' => ['cat', 'rabbit','ferret'],
	'live' => ['Ukr', 'Dnepr']
];
print_r($skils);

// Третий массив
$evidence =[
	'key' => 5,
	'url' =>'https://wayup.in/',
	'ssl'=> 'ok',
	'db' => [
		'port' => 1000,
		'host' => 123,
		'login' => 'login',
		'password' => 'password'
	]
	];

	print_r($evidence);

	$evidence['port'] = '3309'; //добавление элемента в массив 

	print_r($evidence); //вывод всего массива с добавлением нового элемента

	// 3й блок:



	const LOGIN = 'admin';	
	const PASSWORD = 'secret123';	


	// 1 задача

	$tmp_login ='admin';
	$tmp_password = '0000000';

	if($tmp_login === LOGIN && $tmp_password  === PASSWORD){
		echo "Auth success";
	}
	else {
		echo "Check correct your password";
	}
	
	// 2 задача
	$tmp_login ='0000000';
	$tmp_password = '0000000';

	if($tmp_login === LOGIN && $tmp_password  === PASSWORD){
		echo "Auth success";
	}
	else {
		echo "User not found";
	}

		// 3 задача
		$tmp_login ='admin';
		$tmp_password = 'secret123';
	
		if($tmp_login === LOGIN && $tmp_password  === PASSWORD){
			echo "Auth success";
		}
		else {
			echo "User not found";
		}

		//тернарный оператор

		$isStatus = true;
		$statusResult = ($isStatus = true) ? 43224656 : 98645623;

		echo $statusResult;


		//switch 

		

		$typeCar = "BMW";
		switch ($typeCar) {
			case 'BMW':
				echo "Selected is a very good car";
				break;
			case 'Toyota':
				echo "Toyota is a very reliable car!";
				break;
			case 'Lada':
				echo "Don't buy these cars!";
				break;
			
			default:
			echo "Car not found";
				break;
		}