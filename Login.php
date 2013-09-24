<?php session_start();
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
 <head>
 <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
 <title>InternShip Login</title>
 <link rel="shortcut icon" type="image/x-icon" href="img/favicon.ico">
 <link rel="stylesheet" type="text/css" href="Bootmetro/css/bootmetro.css">
 <link rel="stylesheet" type="text/css" href="Bootmetro/css/bootmetro-responsive.css">
 <link rel="stylesheet" type="text/css" href="Bootmetro/css/bootmetro-icons.css">
 <link rel="stylesheet" type="text/css" href="Bootmetro/css/datepicker.css">
 <script src="Bootmetro/js/modernizr-2.6.2.min.js"></script>

 <!--jQuery ตรวจสอบข้อมูลก่อน submit-->

 <link rel="stylesheet" href="jQuery-Validation-Engine-master/css/validationEngine.jquery.css" type="text/css"/>
 <script src="jQuery-Validation-Engine-master/js/jquery-1.8.2.min.js" type="text/javascript">
	</script>
 <script src="jQuery-Validation-Engine-master/js/languages/jquery.validationEngine-en.js" type="text/javascript" charset="utf-8">
	</script>
 <script src="jQuery-Validation-Engine-master/js/jquery.validationEngine.js" type="text/javascript" charset="utf-8">
	</script>
 <script>
		jQuery(document).ready(function(){
			// binds form submission and fields to the validation engine
			jQuery("#FormSigin").validationEngine();
			<!--jQuery("#signin_menu").validationEngine('attach', {promptPosition : "topRight"});-->
		});

		/**
		*
		* @param {jqObject} the field where the validation applies
		* @param {Array[String]} validation rules for this field
		* @param {int} rule index
		* @param {Map} form options
		* @return an error string if validation failed
		*/
		function checkHELLO(field, rules, i, options){
			if (field.val() != "HELLO") {
				// this allows to use i18 for the error msgs
				return options.allrules.validate2fields.alertText;
			}
		}
	</script>
 <style type="text/css">
.navbar-inner {
	-webkit-border-radius: 0;
	-moz-border-radius: 0;
	border-radius: 0;
}
.navbar-inner {
	background-color: #2c2c2c; /* fallback color, place your own */
	/* Gradients for modern browsers, replace as you see fit */
	background-image: -moz-linear-gradient(top, #333333, #222222);
	background-image: -ms-linear-gradient(top, #333333, #222222);
	background-image: -webkit-gradient(linear, 0 0, 0 100%, from(#333333), to(#222222));
	background-image: -webkit-linear-gradient(top, #333333, #222222);
	background-image: -o-linear-gradient(top, #333333, #222222);
	background-image: linear-gradient(top, #333333, #222222);
	background-repeat: repeat-x;

  /* IE8-9 gradient filter */
  filter: progid:DXImageTransform.Microsoft.gradient(startColorstr='#333333', endColorstr='#222222', GradientType=0);
}
body {
	width: 100%;
	height: 100%;
	background: center center fixed;
	webkit-background-size: cover;
	-moz-background-size: cover;
	-o-background-size: cover;
	background-size: cover;
}
html, body {
	height: 100%;
	width: 100%;
	padding: 0;
	margin: 0;
}
.TextLead {
	color: #EEEEEE;
}
</style>
 </head>

 <body>
 <?php  
    
	
		 if(!isset($_SESSION["AdminID"])){
		
		?> 
<div class="container">
   <div class="row-fluid">
    <div class="span4"></div>
    <div class="span4"></div>
    <div class="span4"></div>
    <div class="span4"></div>
    <div class="span4"></div>
    <div class="span4"></div>
    <div class="span4"></div>
    <div class="span4"></div>
    <div class="span4"></div>
    <div class="span6"> 
       <script type="text/javascript">
//Javascript Created by Computerhope http://www.computerhope.com
//store the quotations in arrays
var images = [], 
index = 0;

images[0] = "<img src='img/news001.jpg'>";
images[1] = "<img src='img/map.png'>";
images[2] = "<img src='img/Gallery/pic1.jpg'>";


index = Math.floor(Math.random() * images.length);
document.write(images[index]);
//done
</script> 
     </div>
    <div class="span3 offset1"> <img src="img/logo_mail.jpg" /> <br />
       <br />
       <form id="FormSigin" name="FormSigin" method="post" action="checklogin.php">
        <input type="text" name="txtUsername" placeholder="บัญชีผู้ดูแลระบบ" class="validate[required] text-input input-xlarge">
        <input type="password" name="txtPassword" placeholder="รหัสผ่าน" maxlength="15" class="validate[required,custom[onlyLetterNumber],minSize[5]] text-input input-xlarge" >
        <label class="checkbox">
           <input type="checkbox" id="remember"name="remember"  value="on">
           <span class="metro-checkbox ">Remember Me</span> </label>
        <button class="btn btn-primary" type="submit">Sign in</button>
      </form>
       คุณต้องการค้นหาที่ฝึกงาน ? <a href="dsssearch.php">ค้นหาเดี่ยวนี้</a> </div>
  </div>
 </div>
<footer class="navbar-fixed-bottom text-center">
   <ul class="breadcrumb ">
    <li class="active"><a href="index.php">หน้าแรก</a><span class="divider">/</span></li>
    <li class=""><a class="accordion-toggle" data-toggle="collapse" data-parent="#accordion2" href="dsssearch.php"><span class="icon-search-4"></span>ค้นหาข้อมูล</a><span class="divider">/</span></li>
    <li class=""><a class="accordion-toggle" data-toggle="collapse" data-parent="#accordion2" href="contact.php"><span class="icon-users-2"></span> ติดต่อ</a><span class="divider">/</span></li>
    <li class=""><a href="login.php" target=""><span class=" icon-login"></span> บัญชีผู้ใช้</a><span class="divider">/</span></li>
    <li class=""> <a  href="gallery.php" target=""><span class="icon-pictures"></span> คลังรูปภาพ</a></li>
  </ul>
   <font color="#3b5998"> &copy;2013 Decision Support Systems Internship kkc 
  Rajamangala University of Technology Isan Khonkaen Campus></font><br  />
   <address>
  <a href="mailto:#">kkc@gmail.com</a>
  </address>
 </footer>
 
 <?php
 	 }
		 else  {
echo"<META HTTP-EQUIV='Refresh' CONTENT='0;URL=index.php'>";
		 }
	?>
</body>
</html>