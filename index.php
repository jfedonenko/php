<h3> PHP: Переменные</h3>
<?php
// Переменные 
$myName = 'Juli';
$integer = 100;
$float = 100.20;
$age = 40;

echo $myName;
echo $integer;
echo $float;


// CamelCase  первая буква первого слова — строчная. 
$myBrother = 2;
print_r ($myBrother);

$a = 100;
$b = 5;
echo $a + $a;
echo (" привет $myName "); // работает только со скобками ""
echo ( 'привет ' . $myName); // склеивание , компининация строк
echo ( 'привет ' . $myName . 'мне' . $age .  'лет'); // склеивание , компининация 
//========================================================================================
?>
<h3>PHP: Выражения в определениях</h3>
<?php

//нужно перевести евро в рубли через доллары.
// Вычислим цену 50 евро в долларах, умножив их на 1.25. 
// Допустим, что 1 доллар — 60 рублей:
$dollarsCount = 50 * 1.25; // 62.5
print_r($dollarsCount); // 62.5
$rublesPerDollar = 60;
$rublesCount = $dollarsCount * $rublesPerDollar; // 3750

//А теперь давайте добавим к выводу текст с помощью конкатенации => The price is 3750 rubles
print_r('The price is ' . $rublesCount . ' rubles');


$dollarsPerEuro = 1.25;
$rublesPerDollar = 60;

$eurosCount = 1000;
$dollarsCount = $eurosCount * $dollarsPerEuro;   // 1250
$rublesCount = $dollarsCount * $rublesPerDollar; // 75000

print_r($rublesCount);

//итоговое значение:
//62.5             // 62.5
//50 * 1.25        // 62.5
//120 / 10 * 2     // 24
//(int) '100'      // 100

//"hello"          // "hello"
//"Good" . "will"  // "Goodwill"



$king = 'King Balon the 6th';

// BEGIN
$numberOfCastles  = 6;
$roomsPerCastle  = 17;

print_r($king . ' has ' . ($numberOfCastles * $roomsPerCastle ). ' rooms.');

//========================================================================================
?>

<h3>PHP: Кавычки</h3>
<?php
// Для экранирования используется обратный слеш \.
// Экранируется только ", так как в этой ситуации
// двойные кавычки имеют специальное значение

print_r("Dragon's mother said \"No\"");
// => Dragon's mother said "No"

print_r("- Did Joffrey agree?\n- He did. He also said \"I love using \\n\".");
// => - Did Joffrey agree?
//    - He did. He also said "I love using \n". 

echo  ' hi \'2 \' word';  // скобки hi '2 ' word

print_r("\\"); //вывести сам обратный слеш
// => \
// сделать перевод строки \n (работают только внутри двойных кавычек!)

print_r("- Are you hungry?\n- Aaaarrrgh!");
//========================================================================================
?>



<h3>PHP: Конкатенация - Операция соединения строк (Склеивание)</h3>
<p>print_r('Dragon' . 'stone'); =>  Dragonstone </p>
<?php
// писать через пробел , ставим точку. такой же символ, как и другие, поэтому сколько пробелов поставить в строке — столько и получится:
// Ставим пробел в левой части
print_r("King's " . 'Landing'); // => King's Landing

// Ставим пробел в правой части
print_r("King's" . ' Landing'); // => King's Landing



$what = "Kings" . "road";
print_r($what); // => "Kingsroad"



$first = "Kings";
$what = $first . "road";
print_r($what); // => "Kingsroad"


$first = "Kings";
$last = 'road';
$what = $first . $last;
print_r($what); // => "Kingsroad"



// Hello, Joffrey!
// Here is important information about your account security.
// We couldn't verify you mother's maiden name.

$info = "We couldn't verify you mother's maiden name.";
$intro = "\nHere is important information about your account security.";
$firstName = 'Joffrey';
$greeting = 'Hello';
print_r($greeting . ", " . $firstName . "!");
print_r($intro . "\n" . $info);

// Интерполяция,  работает только со строками в двойных кавычках.
$firstName = 'Joffrey';
$greeting = 'Hello';

print_r("{$greeting}, {$firstName}!");



$firstNumber = 1.10;
$secondNumber = -100;
print_r($firstNumber * $secondNumber);


//========================================================================================
?>



<h3>PHP: Кодировка (таблицa кодов ASCII)</h3>
<p>print_r(chr(126) . chr(94) . chr(37));</p>
<?php

//Найдите в интернете таблицу кодов ASCII. Можно использовать запросы типа "ascii codes table" или «коды ascii». 
print_r(chr(126) . chr(94) . chr(37));
// =>  ~^%.
//========================================================================================
?>

<h3>PHP: Явное преобразование типов </h3>
<?php
// перед значением, в скобках, указывается желаемый тип. В результате значение справа преобразуется в значение другого типа, указанного слева в скобках.
print_r((string) 5);
print_r((int) '345');

//Преобразование типов можно использовать внутри составных выражений:
// Дополнительные скобки помогают визуально отделить части выражения друг от друга
print_r('Это ' . ((string) 5));


(int) '4';  // 4
5 + 4;      // 9
(string) 9; // '9'

// Выведите на экран строку 2 times, полученную из числа 2 и строки times, используя преобразования типов и конкатенацию.
print_r ((int) '2' . (string) ' times');
//========================================================================================
?>




<h3>PHP: Константа</h3>
<?php
// Константа 

define('BD_NAME','test');
echo BD_NAME;   //  -  вывод  без $

// или

const BD_NAMES = 'tests';
echo BD_NAMES; //вывод  без $

// или
const PI = 3.14;
print_r(PI); // => 3.14

// PHP: Магические константы

// __LINE__ — содержит текущую строку файла, в котором она используется
// __FILE__ — путь до текущего файла
// __DIR__ — путь до директории, в которой находится текущий файл
//========================================================================================
?>





<h3>PHP: Массивы</h3>
<?php
// Массивы
// $название_массива = array( значение1 , значение2 и т.д );
// Элементы начинаются с нулевой ячейки 

// $names = array('Juli', 'Max', 'Alina');
// или
// $names = ['Juli', 'Max', 'Alina'];
// print_r($names);   вывод массивов , отображение 
// Array ( [0] => Juli [1] => Max [2] => Alina )
// echo $names[0];


// асоциальные массивы
// первый вариант
$names = ['Juli', 'Max', 'Alina'];
print_r($names); //вывод всего массива
echo $names[0]; //вывод значения


// второй вариант
$profile = [
	'name' => 'Miha',
	'age'=> 4
];
print_r($profile); //вывод всего массива
echo $profile['name'];  //вывод значения
?>
	<h4>
		Имя: <?php echo $profile['name'];?>
	</h4>

<h3>Массив в массиве </h3>
<?php 

// первый вариант
$names = ['Juli', 'Max', 'Alina', [123, 55]]; // Массив в массиве []
print_r($names); //вывод всего массива


// второй вариант
		$profile = [
			'name' => 'Miha',
			'age'=> 4,
			'skills' =>['html', 'css'] // Массив в массиве []
		];

		print_r($profile); //вывод всего массива
		echo $profile['skills'][0]; //вывод нулевой записи из массива массива html
?>
<br>
<?php 
		$users =[
			[
				'name' => 'Miha',
				'age'=> 4,
			],
			[
				'name' => 'Alina',
				'age'=> 2,
			],
			
		];
		print_r($users); //вывод всего массива для подсказки
		var_dump($users); //аналог подсказки с более широким инфо

			//массив $users состоит из нулевого [0]
			// 'name' => 'Miha',
			// 'age'=> 4,

			// и из первого массива [1]
			// 'name' => 'Alina',
			// 'age'=> 2,
		echo $users[0]['age']; // ввывод нулевого массива из массива $users значения 'age'
		echo $users[1]['name']; // ввывод первого массива из массива $users значения 'name'
		
	
		?>
	<h3>Дабавление элемента в массив</h3>
	<?php 

	// обычный массив
	$names = ['Juli', 'Max', 'Alina']; // Массив в массиве []

	print_r($names); //вывод всего массива

	$names[]= 'добавляем элемент';
	?>


	<h3>ДЗ Задачи массивы</h3>
	<?php 

	$profiles = [
		'name' => 'Julia',
		'age' => 40,
		'skils' => ['http', 'css']
	];
	print_r($profiles); //вывод всего массива

	$profiles['locol'] = 'ru'; //добавление элемента в массив 

	print_r($profiles); //вывод всего массива с добавлением нового элемента

	unset($profiles['age']); //убрать элемент из массива 
	
	print_r($profiles); //вывод всего массива с добавлением нового элемента
//========================================================================================
	?>







	<h3> PHP: Условия ( ==  > <  && || ! )</h3>
	<?php 

	// == сравнение без ТД
	// === сравнение с ТД
	// > больше 
	// >= больше или равно
	// < меньше 
	// <= меньше или равно
	// != отрицание
	// !== отрицание с проверкой типа данных
	// ! знак отрицания для проверки не истины
	// && оператор И
	// II оператор ИЛИ


	$age = 17;
	if($age > 18){
		echo "Вам меньше 18";
	}

	// != отрицание
	$skill = "HTML";
	if($skill != "PHP"){
		echo "Вы не подходите надо PHP";
	}

	// !== отрицание с проверкой типа данных
	$skill = "PHP"; // выводить 
	if($skill !== "PHP"){
		echo "Вы не подходите надо PHP";
	}

	// !== отрицание с проверкой типа данных
	$skill = "PHP"; // выводить 
	if($skill !== "PHP"){
		echo "Вы не подходите надо PHP";
	}

	// ! знак отрицания для проверки не истины 
	//(поверяем ее существование)
	$param = 100;

	if(!$param){
		echo "параметр найден";
	}

	$param = true;
	if($param){
		echo "параметр true";
	} else{
		echo "параметр false";
	}

	$param = false;
	if($param){
		echo "параметр не  найден";
	}


$age = 9;

if ($age >= 18) {
	echo "Основной зал";
} 
elseif ( $age < 18 && $age >= 10){
	echo "детский зал";
} 
else {
	echo "вы не можете пройти в зал";
}


$skill = "PHP";

 if ($skill === "PHP" || $skill === "JS"){
	"Подходите";
}
else {
	echo "не подходите";
}
 
?>


	<h3>№ 4 Оператор switch (когда одина переменная)</h3>
	<?php 
	$mood = "fine";

	if($mood === "fine"){
		echo "Я рада что все ОК";
	}
	elseif ($mood === "so so") {
		echo "ну такое";
	}
	elseif ($mood === "bad") {
		echo "bad - расскажи";
	}
	else {
		echo "Не пойму, напиши что-то";
	}


	$mood = "so so";
switch ($mood) {
	case 'fine':
		echo "Я рада что все ОК";
		break;
	case 'so so':
		echo "ну такое";
		break;
	case 'bad':
		echo "bad - расскажи";
		break;
	
	default:
	echo "Не пойму, напиши что-то";
		break;
}

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


?>


	<h3> № 5 Тернарный  оператор ( где ? истина (if) , : или  (else))</h3>
	<?php 

$speed = 55;

echo ($speed <= 60) ? "Скорость в пределах нормы" : "Превышение скорости !";


// где ? истина (if) , : или  (else)

	//тернарный оператор 2 пример ДЗ

	$isStatus = true;
	$statusResult = ($isStatus = true) ? 43224656 : 98645623;

	echo $statusResult;

?>


<h3> №6  Цикл - for</h3>

	<?php 

   //for

   for($i = 0; $i < 5; $i++){
	echo $i . "<br>";
}

	for($i = 0; $i < 5; $i++){
		echo "Hi <br>";
	}
	// $i < 5
	// $i == 0; True +1 ~ echo "Hi";
	// $i == 1; True +1 ~ echo "Hi";
	// $i == 2; True +1 ~ echo "Hi";
	// $i == 3; True +1 ~ echo "Hi";
	// $i == 4; True +1 ~ echo "Hi";
	// $i == 5; FALSE

	for($i = 0; $i <= 5; $i++){
		echo "BR <br>";
	}
	// $i <= 5
	// $i == 0; True +1 ~ echo "Hi";
	// $i == 1; True +1 ~ echo "Hi";
	// $i == 2; True +1 ~ echo "Hi";
	// $i == 3; True +1 ~ echo "Hi";
	// $i == 4; True +1 ~ echo "Hi";
	// $i == 5; True +1 ~ echo "Hi"
	// $i == 6; FALSE

	
   
	$names = [
		'Ivan',
		'Max',
		'Roman'
	];

	//команда - получить число єлеменов в массиве:
	echo count($names);

	//  count($names) помещаем в цикл for вместо 
	// $i < 3 
	// $i < count($names);
	// для динамичности, исключить ошибки


	for ($i = 0; $i < count($names); $i++) {
		echo $names[$i];
	}

//==========================================================
// Задача вывести посты только "pablic" => true


	$posts =[
		[
			"id" => 1,
			"title" => "Lorem Title 1 ",
			"body" => "Lorem Body 1 ",
			"pablic" => true
		],
		[
			"id" => 3,
			"title" => "Lorem Title 2 ",
			"body" => "Lorem Body 2 ",
			"pablic" => false
		],
		[
			"id" => 3,
			"title" => "Lorem Title 3",
			"body" => "Lorem Body 3",
			"pablic" => true
		]
	];

	for ($i = 0; $i < count($posts); $i++) {
	//создаем условия для перебора цикала true и false 
	// где if если  ! проверяем с помощью знака отрицания равен 
	// false пропускаем итерацию (круги) - continue

	if (!$posts [$i]["pablic"]){
	continue;
	}
		echo "<h4>" . $posts[$i]["title"] . "</h4>";
		echo "<p>" . $posts[$i]["body"] . "<p>";
	}

	//==========================================================
	// Задача вывести только первых 2а поса из 4х

	$post =[
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
	 // создаем счетчик 
	 $counter = 0;

	 for ($i = 0; $i < count($post); $i++){
		
		 if ($counter === 2) { // === 2 выводим 2 поста
			 break; // завершить цикл
		 }
		 $counter += 1;

		 echo "<h4>" . $post[$i]["title"] . "</h4>";
		echo "<p>" . $post[$i]["body"] . "<p>";
	 }
	 ?>

	 <h3> Цыкл while </h3>
		 <?php 


$names = [
	'Ivan',
	'Max',
	'Roman'
];

$i = 0;
while ($i < count($names)) {
echo $names[$i];
$i++;
}
?>


<h3> Цыкл foreach </h3>


<?php 


$names = [
	'Ivan',
	'Max',
	'Roman'
];

		foreach ($names as $name) {
		echo $name;
		}

//==========================================================
	// Задача вывести ip Цыкл foreach 

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

	foreach ($posts as $post) {
		echo $post["id"];
		}

		//что бы получинь номер ключа к массиву необх дабввить $index =>
		foreach ($posts as  $index => $post) {

			

			echo "INDEX - " . $index . "\n";
			echo "TITLE - " . $post["title"] . "\n\n";
			}
			//======================================================================
			?>


			<h3> Функции и непонятный return </h3>
			
	
			<?php 
			function myFirst ($a, $b, $c = 1){
				echo $a + $b * $c;
			}
			myFirst(5, 5); // вызов вункции

			
			

			function funReturn (){
				return 1000;
			}
			$num = funReturn(); // присваеваем к переменной функцию
			echo $num; //віводим на єкран



			function myFunc ($a, $b, $c = 1){
				return $a + $b * $c;
			}
			$number = 99; //просто присвоение 
			$resuld = myFunc(5, 10, 20); // задаем значения для переменніх $a, $b, $c = 1
			echo $number + $resuld; // выводим 


			// создаем переменнуб с названием функции 
			$func_name = 'myFunc';
			echo $func_name (100, 15, 20);





			function discriminant($a, $b, $c){
			return  $b/2-4*$a*$c;
			}
			echo discriminant (3, -14, -5);
	//======================================================================
	?>
<h2> Форма товара = store.php </h2>

<form action = "store.php" method = "post">
<p>Название товара</p>
<input type="text" name="title">
<p>Категори</p>
<select name="category" id="">
	<option value="Товары для детей">Товары для детей1</option>
	<option value="Товары для взрослых">Товары для взрослых2</option>
</select>
<p>Описание</p>
<textarea name="textare" id="" cols="30" rows="10"></textarea><br><br>
<button type ="submit"> Кнопка </button>
</form>

<h2> Форма авторизации = login.php </h2>
		
<form action = "login.php" method = "post">
	<p>Login</p>
	<input type="text" name="login">
	<p>Password</p>
	<input type="text" name="password">
	<br><br>
	<button type ="submit"> Войти </button>
</form>