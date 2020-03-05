<!DOCTYPE html>
<!--	Author: 
		Date:	
		File:	paint-estimate.php
		Purpose: OOP Exercise
-->

<html>
<head>
	<title>OOP Exercise</title>
	<link rel ="stylesheet" type="text/css" href="sample.css"  />
</head>

<body>
	<h1>Game</h1>
<?php

	include("inc-game-character-object.php");
  
    $player1 = new GameCharacter();
	$player1->setPlayerName($_POST["playerName1"]);
	$player1->setScore($_POST["score1"]);

    $player2 = new GameCharacter();
	$player2->setPlayerName($_POST["playerName2"]);
	$player2->setScore($_POST["score2"]);

    print($player1->getPlayerName()." has ".$player1->getScore()." points.<br>");
  	print($player2->getPlayerName()." has ".$player2->getScore()." points.<br>");
    if ($player1->getScore() > $player2->getScore()) {
      print("Player 1 wins!");
    } else if ($player1->getScore() < $player2->getScore()) {
      print("Player 2 wins!");
    } else {
      print("It's a tie!");
    }
?>
</body>
</html>