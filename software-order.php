<!DOCTYPE html>
<!--	Author: 
		Date:	
		File:	software-order.php
		Purpose: OOP Exercise
-->

<html>
<head>
	<title>OOP Exercise</title>
	<link rel ="stylesheet" type="text/css" href="sample.css"  />
</head>

<body>
	<h1>Software Order</h1>
<?php

	include("inc-order-object.php");
  
    $order = new Order();
    $order->setItemCost($_POST["cost"]);
    $order->setNumItems($_POST["items"]);
	
	// you can change the variables in the table if you need to use different names
	print("	<table>
			<tr><td>Sub-Total:</td><td>".number_format($order->getSubTotal())."</td></tr>
			<tr><td>Tax:</td><td>".number_format($order->getSalesTax())."</td></tr>
			<tr><td>Shipping and Handling:</td><td>".number_format($order->getShippingHandling())."</td></tr>
			<tr><td>TOTAL:</td><td>".number_format($order->getTotal())."</td></tr>
			</table>");
?>
</body>
</html>