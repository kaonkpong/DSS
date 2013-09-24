<?
	session_start();
	ob_start();
	require("config.inc.php");
	
	$strSQL = "SELECT * FROM admin WHERE AdminID = '".mysql_real_escape_string($_POST['txtUsername'])."' 
	and Password = '".mysql_real_escape_string($_POST['txtPassword'])."'";
	$objQuery = mysql_query($strSQL);
	$Result = mysql_fetch_array($objQuery);
	if($Result)
	{
		$_SESSION["AdminID"] = $Result["AdminID"];
		if($_POST['remember']=='on')
			{
				setcookie("CUsername",$_POST['txtUsername'],time()+3600*24*356);
				setcookie("CPassword",$_POST['txtPassword'],time()+3600*24*356);
				header("location:main.php");
			
			}
		else{	
		setcookie('CUsername', $_POST['txtUsername']);//ไม่ต้องกำหนดเวลาให้คุกกี้  
			header("location:main.php");
		}
			session_write_close();
	}
	else{
		$errorlogin="<span class=errorlogin>บัญชีผู้ดูแลระบบ หรือ รหัสผ่านไม่ถูกต้อง </span>";
		session_register("errorlogin");
		header("location:index.php");
	}
	
	ob_end_flush();
	mysql_close();
?>