<!DOCTYPE html>
<!--Author:
	Date:
	File:	  fixit1.php
	Purpose:  What's wrong here? The code creates an Employee instance.
			  then sets the ID and prints the ID.
			  But the Employee class cannot be found;
			  what statement is missing?
-->

<html>
<head>
	<title>Wage Report</title>
	<link rel ="stylesheet" type="text/css" href="sample.css">
</head>
<body>
	<h1>WAGE REPORT</h1>

	<?php

	include("inc-employee-object.php");
  
    $emp1 = new Employee();

	$emp1->setID("123456");

	print ("<p>The employee's ID is ".$emp1->getID()."</p>");
	?>
</body>
</html>
