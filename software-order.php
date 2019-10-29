<!DOCTYPE html>
<!--Author: Alex Hamrick
	Date: 10/28/2019
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
include('inc-order-object.php');

	// your code here
    $cost = $_POST['cost'];
	$items = $_POST['items'];
	
	$order1 = new Order();
	
	$order1->setItemCost($cost);
	$order1->setNumItems($items);
	
	$subTotal = $order1->getSubTotal();
	$tax = $order1->getSalesTax();
	$shippingHandling = $order1->getShippingHandling();
	$total = $order1->getTotal();
	
	// you can change the variables in the table if you need to use different names
	print("	<table>
			<tr><td>Sub-Total:</td><td>$subTotal</td></tr>
			<tr><td>Tax:</td><td>$tax</td></tr>
			<tr><td>Shipping and Handling:</td><td>$shippingHandling</td></tr>
			<tr><td>TOTAL:</td><td>$total</td></tr>
			</table>");
?>
</body>
</html>