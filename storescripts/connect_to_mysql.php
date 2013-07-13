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
// login info
$db_host = "localhost"; 
$db_username = "willker1_will";  
$db_pass = "hello";  
$db_name = "carrot";  ///willker1_carrot for live

// Run the actual connection here  
mysql_connect("$db_host","$db_username","$db_pass") or die ("could not connect to mysql");
//select the database here 
mysql_select_db("$db_name") or die ("no database");              
?>