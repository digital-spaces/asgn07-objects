<!DOCTYPE html>
<!--	Author: Mike O'Kane
		Date:	August, 2017
		File:	modify3.php
		Purpose: Chapter 15 Exercise
		
		Modify3.html asks the user for an employee ID. Modify1.php receives the ID,
		creates an Employee instance, looks up the employee data using the ID, 
		and displays the weekly pay for the employee.
		
		Modify this so that, instead of displaying the weekly pay, the program displays the annual pay. 
		
		To do this, add a new function in inc-employee-object.php named getAnnualPay(). This function 
		must calculate the hourly wage * 40 * 52 to obtain the annual pay,
		and should return this, formatted the same way as the result in getWeeklyPay(). 
		
		Change the print statement in Modify3.php to display the annual pay instead of the weekly pay, 
-->

<html>
<head>
	<title>Modify 3</title>
	<link rel ="stylesheet" type="text/css" href="sample.css"  />
</head>
<body>
<?php
	include("inc-employee-object.php");

	$id = $_POST["id"];

	$emp1 = new Employee();

	$emp1->findEmployee($id);

	print ("<p>Annual Pay for ".$emp1->getFirstName()." ". $emp1->getLastName().": $".$emp1->getWeeklyPay()."</p>");
?>
</body>
</html>


