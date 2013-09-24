<?php
session_start();
require("config.inc.php");




		if(move_uploaded_file($_FILES["filUpload"]["tmp_name"],"./img/profileimg/".$_FILES["filUpload"]["name"]))
		
		{
		
		//*** Add Condition ***//
		
			$strSQL = "INSERT INTO admin ";
			$strSQL .="(AdminID,Password,Name,LastName,Gender,Major,Address,Email,Phone, Status ,ImgName) ";
			$strSQL .="VALUES ";
			$strSQL .="('".mysql_real_escape_string($_POST["txtAdminID"])."','".mysql_real_escape_string($_POST["Password"])."' ";
			$strSQL .=",'".$_POST["txtName"]."','".$_POST["txtLastName"]."' ";
			$strSQL .=",'".$_POST["Gender"]."','".$_POST["Major"]."' ";
			$strSQL .=",'".$_POST["txtAddress"]."','".$_POST["txtEmail"]."' ";
			$strSQL .=",'".$_POST["txtPhone"]."','".$_POST["txtStatus"]."' ";
			$strSQL .=",'img/profileimg/".$_FILES["filUpload"]["name"]."') ";
			
			
			$objQuery = mysql_query($strSQL) ;
			if($objQuery)
				{
					$Save ="<div class='text-success'><h3> บันทึก เสร็จ. </h3></div> ";
					session_register("Save");
				header("location:addadmin.php");
				}
				else
				{
					$error = "<div class='text-error'> มีข้อผิดพลาดในการบันทึกโปรดตรวจสอบ </div> ";
					session_register("error");
				header("location:addadmin.php");
				}
		  }
	




?>