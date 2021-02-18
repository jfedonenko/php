<?php			
		$todos = [
			[
			"id" => 1,
			"title" => "Купить столовые приборы",
			"date" => "03.04.2020",
			"status" => "Выполнено"
			],
			[
			"id" => 2,
			"title" => "Выбросить мусор",
			"date" => "05.04.2020",
			"status" => "Ожидается"
			],
			[
			"id" => 3,
			"title" => "Помыть машину",
			"date" => "10.04.2020",
			"status" => "Ожидается"
			]
			];


			// цикл for	
			for ($i = 0; $i < count($todos); $i++){
				echo "<p>" . $todos[$i]["id"] . "</p>";
				echo "<h2>" . $todos[$i]["title"] . "</h2>";
				echo "<date>" . $todos[$i]["date"] . "</date>";
				echo "<p>" . $todos[$i]["status"] . "</p>";
			}

			// цикл while		
			$i =0;
			while ($i < count($todos)){
				echo "<p>" . $todos[$i]["id"] . "</p>";
				echo "<h2>" . $todos[$i]["title"] . "</h2>";
				echo "<date>" . $todos[$i]["date"] . "</date>";
				echo "<p>" . $todos[$i]["status"] . "</p>";
				$i++;
			}
			// цикл foreach		
			foreach($todos as $todo){
				echo "<p>" . $todo["id"] . "</p>";
				echo "<h2>" . $todo["title"] . "</h2>";
				echo "<date>" . $todo["date"] . "</date>";
				echo "<p>" . $todo["status"] . "</p>";
			}


	
			function discriminant($a, $b, $c){
				return  $b * $b - 4 * $a * $c;
				}
				echo discriminant (3, -14, -5);
