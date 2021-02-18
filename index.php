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

			for ($i = 0; $i < count($todos); $i++){
				echo "<p>" . $todos[$i]["id"] . "</p>";
				echo "<h2>" . $todos[$i]["title"] . "</h2>";
				echo "<date>" . $todos[$i]["date"] . "</date>";
				echo "<p>" . $todos[$i]["status"] . "</p>";
			}


			function discriminant($a, $b, $c){
			return  $b^2-4*$a*$c;
			}
			echo discriminant (3, -14, -5);