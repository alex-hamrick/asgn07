<!DOCTYPE html>
<!--Author: Alex Hamrick
	Date: 10/28/2019
		File:	game.php
		Purpose: OOP Exercise
-->

<html>
<head>
	<title>OOP Exercise</title>
	<link rel ="stylesheet" type="text/css" href="sample.css">
</head>

<body>
	<h1>beers</h1>
<?php

	include('inc-beer-object.php');
	
	$name1 = $_POST["name1"];
	$color1 = $_POST["color1"];
	$count1 = $_POST["count1"];
	$name2 = $_POST["name2"];
	$color2 = $_POST["color2"];
	$count2 = $_POST["count2"];
	
	$beer1 = new Beer();
	$beer2 = new Beer();
	
	$beer1->setName($name1);
	$beer1->setColor($color1);
	$beer1->setCount($count1);
	
	$beer2->setName($name2);
	$beer2->setColor($color2);
	$beer2->setCount($count2);
	
	 
	 if($count1 > $count2)
	 {
		 print("<p>You have more ".$beer1->getName()."</p>");
	 }
	 else
		 print("<p>You have more ".$beer2->getName()."</p>");
	?>
	</body>
	
	</html>