<?php

class Equation //создаем класс
{
    private $a;
	private $b;
	private $c;

    public function __construct($a, $b, $c) // конструктор присваиваем перемнные
	{
	$this->a =$a;
	$this->b =$b;
	$this->c =$c;
	}

/*
    Метод discriminant (private) должен находить и возвращать дискриминант по 
    формуле **D = b^2 - 4 * a * c** (используйте свойства, которые были указаны 
    в __construct). 
*/
    private function discriminant () 
	{
        $D = ($b*$b) - (4*$a*$c);
     
  }
   
/*
    должен находить x1 вашего квадратного уравнения. Используйте 
    формулу **x1 = -b + √D / 2 * a** (где D это значение полученное из метода discriminant).
*/    
    private function x1 () 
	{
        $x1 = (-$b + $D)  / (2 * $a);
     
  }
/*
    должен находить x2 вашего квадратного уравнения. Используйте формулу x1 = -b - √D / 2 * a 
    (где D это значение полученное из метода discriminant).
*/
    private function x2 () 
	{
        $x1 = -$b - $D / 2 * $a;
      
   }
/*
     Метод result (public) должен возвращать массив с решением квадратного уравнения, 
    который должен состоять из ключей d, x1, x2
 */
    public function result() 
	{
		return
        [    
            "d" => 123,    
            "x1" => 4,    
            "x2" => 6
        ];
	}
    

}