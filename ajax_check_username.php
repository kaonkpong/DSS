<?php
require("config.inc.php");


if(isset($_POST['txtAdminID']))//If a username has been submitted
{


	$CAdminID = mysql_real_escape_string($_POST['txtAdminID']);//Some clean up :)
	
	$check_for_username = mysql_query("SELECT AdminID FROM admin WHERE AdminID='$CAdminID' ");
	//Query to check if username is available or not
	
	if(mysql_num_rows($check_for_username))
	{
	echo '1';//If there is a  record match in the Database - Not Available
	}
	else
	{
	echo '0';//No Record Found - Username is available
	}
}
?>