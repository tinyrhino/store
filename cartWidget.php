<?php
// Copyright (c) 2011, 2012 All Right Reserved, http://www.willkerswell.com
//
// This source is not to be reused for other commercial use.
// All other rights reserved.
//
// THIS CODE WAS WRITEN BY WILL KERSWELL FOR WILLKERSWELL.COM - STORE V1.0
// 
//
// 
// <author>Will Kerswell</author>
// <email>wkerswell@gmail.com</email>
// <date>2012</date>
// <summary>eCommerce Store V1.0</summary>
?>

<?php 
// Script Error Reporting
error_reporting(E_ALL);
ini_set('display_errors', '1');
// Connect to the MySQL database  
include "storescripts/connect_to_mysql.php"; 
//vars 
$qTotal ="";
$cartWidget = "";
$widgetTotal = "";
$product_id_array = '';
if (!isset($_SESSION["cart_array"]) || count($_SESSION["cart_array"]) < 1) {// if cart array is empty 
	//display balance as 0.00
    $cartWidget = "<p align='right'>£0.00</p>";
} else {
	// Start the For Each loop
	$i = 0; 
    foreach ($_SESSION["cart_array"] as $each_item) { 
		//set the item id to local var 
		$item_id = stripcslashes($each_item['item_id']);
		//get all the information for each product 
		$sqlCartWidget = mysql_query("SELECT * FROM products WHERE id='$item_id' LIMIT 1");
		while ($row = mysql_fetch_array($sqlCartWidget)) {
			//loop over the items and set the price to a local var 
			$widgetPrice = stripcslashes($row["price"]);
		}//close while
		$pricetotal = $widgetPrice * $each_item['quantity'];// is the total for each item 
		$widgetTotal = $pricetotal + $widgetTotal; // is the total all items 
		//money format 
		setlocale(LC_MONETARY, "en_GB");
		$pricetotal = "£" . number_format($pricetotal, 2);
       //////////////////////////////////////////////////////////////////////////////////////////////to be changed on server to make sure the correct currency goes through to paypal!!!!
	   //////////////////////////////////////////////////////////////////////////////////////////////$pricetotal = money_format("#10.2n", $pricetotal);
		// count how many product are in the array 
		$quantity = $each_item['quantity']  ;
		$qTotal = $quantity + $qTotal;
		$x = $i + 1;
		$i++; 
	} //close for
	if ($qTotal > 1) {
		$itemsuf = "Items"; 
	}else {$itemsuf = "Item";
	}//end if
	//build cart widget
	$cartWidget .= $qTotal.' '.$itemsuf.': £ ' . $widgetTotal;
}//end else non empty cart
?>

