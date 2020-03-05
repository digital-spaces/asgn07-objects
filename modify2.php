<!DOCTYPE html>
<!--	Author: Mike O'Kane
		Date:	August, 2017
		File:	modify2.php
		Purpose: Chapter 15 Exercise
		
		Modify1.html asks the user for an employee ID. Modify1.php receives the ID,
		creates an Employee instance, looks up the employee data using the ID, 
		and displays the weekly pay for the employee. The problem is, what if the ID is not 
		found? Look at the findEmployee() function in inc-employee-object.php. The WHILE loop
		continues to read lines from the employee file until it either finds an employee with 
		the right ID or reaches the end of the file. If it finds the right ID then a variable 
		named $notFound is set to FALSE, but if the loop reaches the end of the file without 
		finding the right ID the $notFound variable will still be true.
		
                Add an IF.. ELSE structure at the end the findEmployee() function that returns 0 if 
                $notFound is true, otherwise returns 1 if it is false. 
                (be sure you do this AFTER the loop structure and not inside the loop structure!). 
                
                Now modify the code in Modify2.php so that the program uses a variable named $result to 
                receive the value returned by findEmployee(), which will be 1 or 0, and uses this 
                in the test of an IF..ELSE structure: if $result is 1 display the weekly pay, or if 
                $result is 0, display a message that the ID could not be found.
-->
<html>
<head>
	<title>Modify2</title>
	<link rel ="stylesheet" type="text/css" href="sample.css">
</head>
<body>

	<h1>Modify2</h1>

	<?php
	include("inc-employee-object.php");

	$id = $_POST["id"];

	$emp1 = new Employee();

	$emp1->findEmployee($id);

	$result = $emp1->findEmployee($id);
    if ($result) {
      print ("<p>Weekly Pay for ".$emp1->getFirstName()." ". $emp1->getLastName().": $".$emp1->getWeeklyPay()."</p>");
    } else {
      print("ID could not be found.");
    }

	?>

</body>
</html>
