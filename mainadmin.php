<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
     <head>
     <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
     <title>หน้าหลัก</title>
     <meta name="viewport" content="width=device-width, initial-scale=1.0">
     <link href="Bootmetro/css/bootstrap-responsive.css" rel="stylesheet">
     <link rel="stylesheet" type="text/css" href="Bootmetro/css/bootmetro.css">
     <link rel="stylesheet" type="text/css" href="Bootmetro/css/bootmetro-responsive.css">
     <link rel="stylesheet" type="text/css" href="Bootmetro/css/bootmetro-icons.css">
     <link rel="stylesheet" type="text/css" href="Bootmetro/css/bootmetro-ui-light.css">
     <link rel="stylesheet" type="text/css" href="Bootmetro/css/datepicker.css">
     <script src="Bootmetro/js/modernizr-2.6.2.min.js"></script>
     <style type="text/css">
div.borderC {
	border-right:1px solid;
	height:560px;
	border-color:#E4E4E4;
}
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
</style>

     </head>
     <body>
<div class="navbar navbar-inverse navbar-fixed-top" >
       <div class="navbar-inner" style="-webkit-border-radius: 0; -moz-border-radius: 0; border-radius: 0;">
    <div class="container"> 
           
           <!-- .btn-navbar is used as the toggle for collapsed navbar content --> 
           <a class="btn btn-navbar" data-toggle="collapse" data-target=".nav-collapse"> <span class="icon-bar"></span> <span class="icon-bar"></span> <span class="icon-bar"></span> </a> 
           
           <!-- Be sure to leave the brand out there if you want it shown --> 
           <a class="brand" href="MainAdmin.php" >DSS<i class="icon-search"></i></a> 
           
           <!-- Everything you want hidden at 940px or less, place within here -->
           <div class="nav-collapse collapse"> 
        <!-- .nav, .navbar-search, .navbar-form, etc -->
        
        <ul class="nav pull-right">
               <li><a href="#">ยินดีต้อนรับ</a></li>
               <!-- Read about Bootstrap dropdowns at http://twbs.github.com/bootstrap/javascript.html#dropdowns -->
               <li class="dropdown"> <a href="#" class="dropdown-toggle" data-toggle="dropdown">ตั้งค่า <i class="icon-cogs" ></i></a>
            <ul class="dropdown-menu">
                   <li class="nav-header">รายการตั้งค่า</li>
                   <li class=""><a href="editprofile.php">แก้ไขข้อมูลส่วนตัว</a></li>
                   <li class=""><a href="editcompany.php">แก้ไขข้อมูลสถานฝึกงาน</a></li>
                   <li><a href="logout.php">ออกจากระบบ</a></li>
                   <li class="divider"></li>
                   <li><a href="#">วิธีใช้</a></li>
                 </ul>
          </li>
             </ul>
      </div>
         </div>
  </div>
     </div>
<div id="alerts-container" style="margin-top:50px;" ></div>
<div class="container-fluid">
 
<div class="row-fluid">
<!--Sidebar content-->

<div class="bs-docs-sidebar  span3" >
       <ul class="nav metro-nav-list " >
    <!-- Metro Components -->
    <li class=""> <a href="#" class="nav-header">หน้าหลัก</a> </li>
    <li class=""> <a href="MainAdmin.php">รายการ</a>
           <ul class="nav">
        <li class=""><a href="MMember.php" target="Ibody">จัดการข้อมูลสมาชิก</a></li>
        <li class=""><a href="MCompany.php" target="Ibody">จัดการข้อมูลสถานประกอบการ</a></li>
        <li class=""><a href="SCompany.php" target="Ibody">ตรวจสอบการเพิ่มสถานประกอบการใหม่</a></li>
      </ul>
         </li>
    </ul>
     </div>
     
                <div class="bs-docs-sidebar span9" >
                <!--Body content-->
               <iframe id="Ibody" src="MMember.php" frameborder="0" width="968" height="600" scrolling="auto">
               
               </iframe>
                
            
               
			</div>
<!--Body end-->
</div>
</div>
<footer >
   <?php require("footer.php");?>
</footer>
<script src="Bootmetro/js/jquery-1.10.0.min.js"></script><!-- DROP DOWN -->
<script>window.jQuery || document.write("<script src='Bootmetro/js/jquery-1.8.3.min.js'>\x3C/script>")</script>

<!--[if IE 7]>
   <script type="text/javascript" src="scripts/bootmetro-icons-ie7.js">
   <![endif]-->

<script type="text/javascript" src="Bootmetro/js/google-code-prettify/prettify.js"></script>
<script type="text/javascript" src="Bootmetro/js/bootstrap.min.js"></script>
<script type="text/javascript" src="Bootmetro/js/bootmetro-panorama.js"></script>
<script type="text/javascript" src="Bootmetro/js/bootmetro-pivot.js"></script>
<script type="text/javascript" src="Bootmetro/js/bootmetro-charms.js"></script>
<script type="text/javascript" src="Bootmetro/js/bootstrap-datepicker.js"></script>
<script type="text/javascript" src="Bootmetro/js/holder.js"></script>
<script type="text/javascript" src="Bootmetro/js/Chart.min.js"></script>
<script type="text/javascript" src="Bootmetro/js/docs.js"></script>
</body>
</html>