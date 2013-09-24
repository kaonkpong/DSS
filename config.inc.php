<?php



$objConnect = mysql_connect("localhost","root","1234") or die("Error Connect to Database");

$objDB = mysql_select_db("internship");
@mysql_query("SET NAMES UTF8");


?>