
<html>
<head>
<title>
functions</title>
</head>
<body>
<?php
//write greeting function
 /*function sayHi(){
	echo "hello user";
	}
 sayHi();*/
 $x=5;
 function sayHi($name){
	// global	$x;
	echo "hello $name <br>";//.$x."<br>";
	}
 sayHi("amani");
 //sayHi("ahmad");
 function disp($name,$age){
	echo "hello $name you are $age <br>";
	}
 disp("amani",40);
 disp("ali",30);
 function cube ($x){
	 //echo "hello";
	 return $x*$x*$x;
	// echo "hello"; this will not be printed bcz it is after return
 }
 //echo cube (4);
 $cuberesult=cube(4);
 echo $cuberesult;
 echo "<br>";
 
 function myTest() {
  // static $x = 0
  $x = 0;
  echo $x;
  $x++;
}

myTest();
echo "<br>";
myTest();
echo "<br>";
myTest();
echo "<br>";

function getmax($num1,$num2){
	if($num1>$num2){
		return $num1;
	}
	else
	{
		return $num2;
		
	}
}
/*function getmax($num1,$num2,$num3){
	if($num1>=$num2&& $num1=>$num3){
		return $num1;
	}
	else if($num2>=$num3&& $num2=>$num1)
	{
		return $num2;
		
	}
	else 
		return num3;
	
}*/
echo getmax(5,7);
?> 


</body>
</html>

