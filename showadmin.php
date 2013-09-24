<?php session_start();		
                             
if($_SESSION['AdminID'] =="" )
{
	echo "Please Login To System....";
	echo "<meta http-equiv='refresh' content='2;URL=index.php'>";
	exit();
}
require("config.inc.php");

$strSQL = "SELECT * FROM admin ";

 $QRY = mysql_query($strSQL) or die ("Error Query [".$strSQL."]");


?>
<!DOCTYPE html>
<html lang="en">
   <head>
   <meta charset="utf-8">
   <link rel="shortcut icon" type="image/x-icon" href="img/favicon.ico">
   <title>ข้อมูลผู้ดูแลระบบ</title>
   <meta name="viewport" content="width=device-width, initial-scale=1.0">

   <!--jQuery ตรวจสอบข้อมูลก่อน submit-->
   <link rel="stylesheet" href="jQuery-Validation-Engine-master/css/validationEngine.jquery.css" type="text/css"/>
   <link rel="stylesheet" href="jQuery-Validation-Engine-master/css/template.css" type="text/css"/>
   <script src="jQuery-Validation-Engine-master/js/jquery-1.8.2.min.js" type="text/javascript">
	</script>
   <script src="jQuery-Validation-Engine-master/js/languages/jquery.validationEngine-en.js" type="text/javascript" charset="utf-8">
	</script>
   <script src="jQuery-Validation-Engine-master/js/jquery.validationEngine.js" type="text/javascript" charset="utf-8">
	</script>

   <link href="Bootmetro/css/bootstrap-responsive.css" rel="stylesheet">
   <link rel="stylesheet" type="text/css" href="Bootmetro/css/bootmetro.css">
   <link rel="stylesheet" type="text/css" href="Bootmetro/css/bootmetro-responsive.css">
   <link rel="stylesheet" type="text/css" href="Bootmetro/css/bootmetro-icons.css">
   <link rel="stylesheet" type="text/css" href="Bootmetro/css/bootmetro-ui-light.css">
   <link rel="stylesheet" type="text/css" href="Bootmetro/css/datepicker.css">
   <script src="Bootmetro/js/modernizr-2.6.2.min.js"></script>

   



   <style type="text/css">
   a:link {
	color: #24A0DA;
}
a:visited {
	color: #24A0DA;
}
   </style>
   </head>
   <body>
<div class="navbar navbar-inverse">
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
        
           <li><a href="editprofile.php" class="Welcome"><?php echo $_SESSION['AdminID']; ?></a></li>
          <!-- Read about Bootstrap dropdowns at http://twbs.github.com/bootstrap/javascript.html#dropdowns -->
          <li class="dropdown"> <a href="#" class="dropdown-toggle" data-toggle="dropdown">ตั้งค่า <i class="icon-cogs" ></i></a>
            <ul class="dropdown-menu span3">
             <li class=""> <a href="#" class="nav-header"> หน้าหลัก</a> </li>
  <li ><a href="main.php" > <span class=" icon-menu-3"></span> รายการผู้ดูแลระบบ</a>
    <ul class="nav">
    <li class="active"><a href="showadmin.php"><span><img src="img/icon/list.png" /></span> รายละเอียดผู้ดูแลระบบ</a></li>
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
<div id="alerts-container"></div>
<div id="doc-container" class="container">
     <div class="row-fluid"> 
    <!--Sidebar content-->
    
   
    <div class="span12 borderC"> 
         <!--Body content-->
         
           
                  <div id="nav-bar">
               <div class="row">
                  <div class="span9">
                     <div id="header-container">
                        <a id="backbutton" class="win-backbutton" href="main.php"></a>
                        <h5>  &nbsp;  &nbsp;&nbsp; &nbsp; รายละเอียดผู้ดูแลระบบ</h5>
                        <div class="dropdown offset1">
                           <a class="header-dropdown dropdown-toggle accent-color" data-toggle="dropdown" href="#">
                                &nbsp; &nbsp; รายการ
                              <b class="caret"></b>
                           </a>
                           <ul class="dropdown-menu">
                              <li class=""> <a href="#" class="nav-header " > หน้าหลัก</a> </li>
                                  <li > <a href="main.php"><span class=" icon-menu-3"></span> รายการผู้ดูแลระบบ</a>
                          <li ><a href="showadmin.php"><span><img src="img/icon/list.png" /></span> รายละเอียดผู้ดูแลระบบ</a></li>
                                       <li><a href="addadmin.php"><span><img src="img/icon/friedn added.png" /></span> เพิ่มข้อมูลผู้ดูแลระบบ</a></li>
                                      <li><a href="editprofile.php"><span ><img src="img/icon/editprofile.png" /></span> แก้ไขข้อมูลส่วนตัว</a></li>
                                 
                                  </li>
                              <li class="divider"></li>
                             <li> <a href="main.php"><span class="icon-office"></span>  รายการสถานที่ฝึกงาน</a>
   
   		  <li ><a href="managecompany.php"><span ><img src="img/icon/1379637604_Company.png" /></span> จัดการข้อมูลสถานฝึกงาน</a></li>
           <li ><a href="addcompany.php"><span><img src="img/icon/addcom.png" /></span> เพิ่มข้อมูลสถานฝึกงาน</a></li>
      <li><a href="editcompany.php"><span><img src="img/icon/editcom.png" /></span > แก้ไขข้อมูลสถานฝึกงาน</a></li>

  </li>
  
                           </ul>
                        </div>
                     </div>
                  </div>
               </div>
            </div>



                <table class="table-hover table-bordered text-center">
                <thead>
                <th>รหัสผู้ดูแลระบบ</th>
                <th>ชื่อ</th>
                <th>นามสกุล</th>
                <th>เพศ</th>
                <th>สาขา</th>
                <th>ที่อยู่</th>
                <th>Email</th>
                <th>เบอร์ติดต่อ</th>
                 <th>ตำแหน่ง</th>
                  <th>รายละเอียด</th>
                </thead>
                <tbody>
             
             <?php
   

while($RS = mysql_fetch_array($QRY))

{
?>
               <tr><td> <?php echo $RS["AdminID"];?></td><td> <?php echo $RS["Name"];?></td><td> <?php echo $RS["LastName"];?></td> 
               <td> <?php echo $RS["Gender"];?></td><td> <?php echo $RS["Major"];?></td>
                <td> <?php echo $RS["Address"];?></td><td> <?php echo $RS["Email"];?></td>
                <td> <?php echo $RS["Phone"];?></td><td> <?php echo $RS["Status"];?></td>
                <td width="80px;"><a href="showdetailadmin.php?AdminID=<?=$RS["AdminID"];?>">รายละเอียด</a></td>
               </tr>
            
            
            <?php
}
			
	
			?>
        
                </tbody>
                </table>

<?php

mysql_close($objConnect);

?>










       </div><!--Body end span 9--> 
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