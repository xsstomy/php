<?php 
	echo "hello world";

	echo "<br>";
	$x = 5985.6;
	var_dump($x);

	echo "<br>";

	/**
	* 
	*/
	class Car
	{
		var $color;
		function Car($color = "green"){
			$this->color = $color;
		}

		function what_color(){
			return $this->color;
		}
		
	}

	$c = new Car("white");
	var_dump($c);
	echo "<br>";
	define("G","nihao");

	echo G;


echo "<br>";

		$a = "Hello";
		$b = $a . " world!";
		echo $b; // 输出 Hello world! 

		echo "<br>";

		$x="Hello";
		$x .= " world!";
		echo $x; // 输出 Hello world! 
		echo "<br>";
      $cars=array("Volvo","BMW","SAAB");

      foreach ($cars as $key => $value) {
      	# code...
      	echo $value."<br>";
      }

      		$x = 75; 
			$y = 25;
			 
			function addition() { 
			  $GLOBALS['z'] = $GLOBALS['x'] + $GLOBALS['y']; 
			}
			 
			addition(); 
			echo $z; 



			echo $_SERVER['PHP_SELF'];
echo "<br>";
echo $_SERVER['SERVER_NAME'];
echo "<br>";
echo $_SERVER['HTTP_HOST'];
echo "<br>";
echo $_SERVER['HTTP_REFERER'];
echo "<br>";
echo $_SERVER['HTTP_USER_AGENT'];
echo "<br>";
echo $_SERVER['SCRIPT_NAME'];
 ?>