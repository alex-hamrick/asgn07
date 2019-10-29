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
	<h1>GAME CHARCTERS</h1>
<?php

	include('inc-game-character-object.php');
	
    $name1 = $_POST["name1"];
	$score1 = $_POST["score1"];
	$name2 = $_POST["name2"];
	$score2 = $_POST["score2"];
	
	
	$c1 = new GameCharacter();
	$c2 = new GameCharacter();
	
	$c1->setPlayerName($name1);
	$c2->setPlayerName($name2);
	
	$c1->setScore($score1);
	$c2->setScore($score2);
	
	print("	<table>
			<tr><td>Character 1 name and score:</td><td>$name1,  $score1</td></tr>
			<tr><td>Character 2 name and score:</td><td>$name2,  $score2</td></tr>
			</table>");
			
			if($score1 > $score2)
			{
			print("<p>Character 1 wins</p>");	
			}
			else
				
			print("<p>Character 2 wins</p>");	
			 ?> </body>
</html>