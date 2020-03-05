<!DOCTYPE html>
<!--	Author: Mike O'Kane
		Date:	August, 2017
		File:	modify1.php
		Purpose: Chapter 15 Exercise
		
		Modify1.html asks the user for an employee ID. Modify1.php receives the ID,
		creates an Employee instance, looks up the employee data using the ID, 
		and displays the weekly pay for the employee.
		
		Modify this application so that Modify1.html asks for three ID's, and Modify1.php
		receives the three ID's and uses three Employee instances to obtain and display the 
		pay for all three.
			
		Here are three valid ID's to test this: 003345, 012345, 123456
-->

<html>
<head>
	<title>Modify 1</title>
	<link rel ="stylesheet" type="text/css" href="sample.css"  />
</head>
<body>
<?php
	include("inc-employee-object.php");

	$id1 = $_POST["id1"];
	$id2 = $_POST["id2"];
	$id3 = $_POST["id3"];

	$emp1 = new Employee();
	$emp2 = new Employee();
	$emp3 = new Employee();

	$emp1->findEmployee($id1);
	$emp2->findEmployee($id2);
	$emp3->findEmployee($id3);

	print ("<p>Weekly Pay for ".$emp1->getFirstName()." ". $emp1->getLastName().": $".$emp1->getWeeklyPay()."</p>");
	print ("<p>Weekly Pay for ".$emp2->getFirstName()." ". $emp2->getLastName().": $".$emp2->getWeeklyPay()."</p>");
	print ("<p>Weekly Pay for ".$emp3->getFirstName()." ". $emp3->getLastName().": $".$emp3->getWeeklyPay()."</p>");
?>
</body>
</html>


