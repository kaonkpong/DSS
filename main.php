<?php session_start();		
                             
if($_SESSION['AdminID'] =="" )
{
	echo "Please Login To System....";
	echo "<meta http-equiv='refresh' content='2;URL=index.php'>";
	exit();
}

?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>หน้าหลัก</title>
<link rel="shortcut icon" type="image/x-icon" href="img/favicon.ico">
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

<style type="text/css">
a:link {
	color: #000;
}
a:visited {
	color: #000;
}
a:hover {
	color: #0080C0;
}
</style>

<script src="Bootmetro/js/jquery-1.10.0.min.js"></script><!-- DROP DOWN -->

<style type="text/css">
#progress {
	position:fixed;
	z-index:2147483647;
	top:0;
	left:-6px;
	width:0%;
	height:2px;
	background:#b91f1f;
	-moz-border-radius:1px;
	-webkit-border-radius:1px;
	border-radius:1px;
	-moz-transition:width 500ms ease-out,opacity 400ms linear;
	-ms-transition:width 500ms ease-out,opacity 400ms linear;
	-o-transition:width 500ms ease-out,opacity 400ms linear;
	-webkit-transition:width 500ms ease-out,opacity 400ms linear;
	transition:width 500ms ease-out,opacity 400ms linear
}
#progress.done {
	opacity:0
}
#progress dd,#progress dt {
	position:absolute;
	top:0;
	height:2px;
	-moz-box-shadow:#b91f1f 1px 0 6px 1px;
	-ms-box-shadow:#b91f1f 1px 0 6px 1px;
	-webkit-box-shadow:#b91f1f 1px 0 6px 1px;
	box-shadow:#b91f1f 1px 0 6px 1px;
	-moz-border-radius:100%;
	-webkit-border-radius:100%;
	border-radius:100%
}
#progress dd {
	opacity:1;
	width:20px;
	right:0;
	clip:rect(-6px,22px,14px,10px)
}
#progress dt {
	opacity:1;
	width:180px;
	right:-80px;
	clip:rect(-6px,90px,14px,-6px)
}
@-moz-keyframes pulse {
	30% {
		opacity:1
	}
	60% {
		opacity:0
	}
	100% {
		opacity:1
	}
}
@-ms-keyframes pulse {
	30% {
		opacity:.6
	}
	60% {
		opacity:0
	}
	100% {
		opacity:.6
	}
}
@-o-keyframes pulse {
	30% {
		opacity:1
	}
	60% {
		opacity:0
	}
	100% {
		opacity:1
	}
}
@-webkit-keyframes pulse {
	30% {
		opacity:.6
	}
	60% {
		opacity:0
	}
	100% {
		opacity:.6
	}
}
@keyframes pulse {
	30% {
		opacity:1
	}
	60% {
		opacity:0
	}
	100% {
		opacity:1
	}
}
#progress.waiting dd,#progress.waiting dt {
	-moz-animation:pulse 2s ease-out 0s infinite;
	-ms-animation:pulse 2s ease-out 0s infinite;
	-o-animation:pulse 2s ease-out 0s infinite;
	-webkit-animation:pulse 2s ease-out 0s infinite;
	animation:pulse 2s ease-out 0s infinite
}
</style>
<script>

$({property: 0}).animate({property: 105}, {
    duration: 3000,
    step: function() {
        var _percent = Math.round(this.property);
        $('#progress').css('width',  _percent+"%");
        if(_percent == 105) {
            $("#progress").addClass("done");
        }
    },
   
});
</script>

</head>
<body >




<div class="navbar navbar-inverse navbar-fixed-top" >
  <div class="navbar-inner" style="-webkit-border-radius: 0; -moz-border-radius: 0; border-radius: 0;">
    <div class="container"> 
      
      <!-- .btn-navbar is used as the toggle for collapsed navbar content --> 
      <a class="btn btn-navbar" data-toggle="collapse" data-target=".nav-collapse"> <span class="icon-bar"></span> <span class="icon-bar"></span> <span class="icon-bar"></span> </a> 
      
      <!-- Be sure to leave the brand out there if you want it shown --> 
      <a class="brand" href="main.php" >DSS<i class="icon-search"></i></a> 
      
      <!-- Everything you want hidden at 940px or less, place within here -->
      <div class="nav-collapse collapse"> 
        <!-- .nav, .navbar-search, .navbar-form, etc -->
        
        <ul class="nav pull-right">
        
           <li><a href="editprofile.php" class="Welcome"><?php echo $_SESSION["AdminID"]; ?></a></li>
          <!-- Read about Bootstrap dropdowns at http://twbs.github.com/bootstrap/javascript.html#dropdowns -->
          <li class="dropdown"> <a href="#" class="dropdown-toggle" data-toggle="dropdown">ตั้งค่า <i class="icon-cogs" ></i></a>
            <ul class="dropdown-menu span3">
             <li class=""> <a href="#" class="nav-header"> หน้าหลัก</a> </li>
  <li ><a href="main.php" > <span class=" icon-menu-3"></span> รายการผู้ดูแลระบบ</a>
    <ul class="nav">
    	 <li ><a href="showadmin.php"><span><img src="img/icon/list.png" /></span> รายละเอียดผู้ดูแลระบบ</a></li>
       <li ><a href="addadmin.php"><span><img src="img/icon/friedn added.png" /></span> เพิ่มข้อมูลผู้ดูแลระบบ</a></li>
      <li><a href="editprofile.php"><span ><img src="img/icon/editprofile.png" /></span> แก้ไขข้อมูลส่วนตัว</a></li>
    </ul>
  </li>
  
  <li> <span class="icon-office"></span>  รายการสถานที่ฝึกงาน
    <ul class="nav">
   		  <li ><a href="managecompany.php"><span ><img src="img/icon/1379637604_Company.png" /></span> จัดการข้อมูลสถานฝึกงาน</a></li>
           <li ><a href="addcompany.php"><span><img src="img/icon/addcom.png" /></span> เพิ่มข้อมูลสถานฝึกงาน</a></li>
      <li><a href="editcompany.php"><span><img src="img/icon/editcom.png" /></span > แก้ไขข้อมูลสถานฝึกงาน</a></li>
    </ul>
  </li>
<li class=""> <a  href="gallery.php" target="_new"><span ><img src="img/icon/photos icon.png" /></span> คลังรูปภาพ</a></li>
  
 
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

<div id="alerts-container" style="margin-top:50px;" >

<div id="progress" class="waiting">
    <dt></dt>
    <dd></dd>			
</div>
</div>



<div class="container">
<div class="row">
<!--Sidebar content-->

<div class="bs-docs-sidebar  span3">
<ul class="nav metro-nav-list " >
  <!-- Metro Components -->
  <li class=""> <a href="#" class="nav-header"> หน้าหลัก</a> </li>
  <li > <a href="main.php"><span class=" icon-menu-3"></span>  รายการผู้ดูแลระบบ</a>
    <ul class="nav">
    <li ><a href="showadmin.php"><span><img src="img/icon/list.png" /></span> รายละเอียดผู้ดูแลระบบ</a></li>
       <li ><a href="addadmin.php"><span><img src="img/icon/friedn added.png" /></span> เพิ่มข้อมูลผู้ดูแลระบบ</a></li>
      <li><a href="editprofile.php"><span ><img src="img/icon/editprofile.png" /></span> แก้ไขข้อมูลส่วนตัว</a></li>
    </ul>
  </li>
  
  <li> <a href="main.php"><span class="icon-office"></span>  รายการสถานที่ฝึกงาน</a>
    <ul class="nav">
   		  <li ><a href="managecompany.php"><span ><img src="img/icon/1379637604_Company.png" /></span> จัดการข้อมูลสถานฝึกงาน</a></li>
           <li ><a href="addcompany.php"><span><img src="img/icon/addcom.png" /></span> เพิ่มข้อมูลสถานฝึกงาน</a></li>
      <li><a href="editcompany.php"><span><img src="img/icon/editcom.png" /></span > แก้ไขข้อมูลสถานฝึกงาน</a></li>
    </ul>
  </li>
  
  <li> <a href="main.php"><span class=" icon-newspaper-2"></span>  รายการอื่นๆ</a>
    <ul class="nav">
          <li class=""><a class="accordion-toggle" data-toggle="collapse" data-parent="#accordion2" href="#collapse2"><span><img src="img/icon/friend feeds.png" /></span> ข่าวสาร</a></li>
        <li class=""><a class="accordion-toggle" data-toggle="collapse" data-parent="#accordion2" href="#collapse3"><span><img src="img/icon/about.png" /></span> เกี่ยวกับเรา</a></li>
        <li class=""><a class="accordion-toggle" data-toggle="collapse" data-parent="#accordion2" href="#collapse4"><span ><img src="img/icon/groups.png" /></span>  ติดต่อ</a></li>
         <li class=""> <a  href="gallery.php" target="_new"><span ><img src="img/icon/photos icon.png" /></span> คลังรูปภาพ</a></li>
    </ul>
  </li>
  
  
</ul>


</div>
<div class="span9">
  <!--Body content-->

<div class="accordion" id="accordion2">

	<div class="accordion-group">
        <div class="accordion-heading"><a class="accordion-toggle" data-toggle="collapse" data-parent="#accordion2" href="#collapse2">
          <h3><span class=" icon-newspaper-2"></span>  ข่าวสารใหม่</h3>
          </a></div>
        <div id="collapse2" class="accordion-body collapse in">
            <div class="accordion-inner">
                <?php include("news.php");?>
            </div>
        		
        </div>
      </div>
<div class="accordion-group">
<div class="accordion-heading"> <a class="accordion-toggle" data-toggle="collapse" data-parent="#accordion2" href="#collapse3">
  <h3><span class=" icon-history"></span> เกี่ยวกับเรา</h3>
  </a> </div>
<div id="collapse3" class="accordion-body collapse">
<div class="accordion-inner">
<?php include("aboutus.php");?>
</div>
</div>
</div>
        <div class="accordion-group">
            <div class="accordion-heading"><a class="accordion-toggle" data-toggle="collapse" data-parent="#accordion2" href="#collapse4">
              <h3><span class="icon-users-2"></span>ติดต่อ</h3>
              </a></div>
        <div id="collapse4" class="accordion-body collapse">
        <div class="accordion-inner">
      		
  <?php include("contact.php");?>
        		</div>
        	</div>
        </div>
        
        
</div>

	

</div><!--Body end span9-->

</div>
</div>


<footer class="align-center">

  <?php require("footer.php");?>
</footer>



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