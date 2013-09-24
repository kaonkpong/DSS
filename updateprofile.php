<?php
session_start();
require("config.inc.php");
//*** Update Condition ***//
if($_SESSION["AdminID"] )
{
	    $strSQL = "UPDATE admin SET ";
		$strSQL .="Password = '$_POST[Password]'  ";
		$strSQL .=",Name = '$_POST[txtName]' ";
		$strSQL .=",LastName = '$_POST[txtLastName]' ";
		$strSQL .=",Gender = '$_POST[Gender]' ";
		$strSQL .=",Major = '$_POST[Major]' ";
		$strSQL .=",Address = '$_POST[txtAddress]' ";
		$strSQL .=",Email = '$_POST[txtEmail]' ";
		$strSQL .=",Phone = '$_POST[txtPhone]' ";
		$strSQL .=",Status = '$_POST[txtStatus]' ";
		$strSQL .="WHERE AdminID = '".$_SESSION["AdminID"]."' ";
		$objQuery = mysql_query($strSQL);
		
		if($_FILES["filUpload"]["name"] != "")
	{

			//*** Delete Old File ***//			
			@unlink($_POST["hdnOldFile"]);
			
			//*** Update New File ***//
			$imgname = $_FILES['filUpload']['name'];


		if(is_uploaded_file($_FILES['filUpload']['tmp_name']) ){
			copy($_FILES['filUpload']['tmp_name'],"./img/profileimg/$imgname");
		


			$url ="img/profileimg/$imgname";
			$Filename =  $_FILES['filUpload']['name'];
		}else{
		echo "<br>ไม่สามารถ Upload รูปภาพได้";
			
		}
			
			$strSQL = "UPDATE admin ";
			$strSQL .=" SET ImgName = '".$url."' WHERE AdminID = '".$_SESSION['AdminID']."' ";
			$objQuery = mysql_query($strSQL);		

			
	}
		
	if($objQuery)
		{
			$Save ="<div class='text-success'><h3> บันทึก เสร็จ. </h3></div> ";
			session_register("Save");
		header("location:editprofile.php");
		}
		else
		{
			$error = "<div class='text-error'>Error Save [".$strSQL."] </div> ";
			session_register("error");
		header("location:editprofile.php");
		}
	
}

mysql_close($objConnect);
?>