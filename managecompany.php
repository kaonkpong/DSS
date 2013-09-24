<?php session_start();
?>
<!DOCTYPE html>
<html lang="en">
   <head>
   <meta charset="utf-8">
   <link rel="shortcut icon" type="image/x-icon" href="img/favicon.ico">
   <title>ข้อมูลสถานที่ฝึกงาน</title>
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
   <script>
		jQuery(document).ready(function(){
			// binds form submission and fields to the validation engine
			jQuery("#editprofile").validationEngine();
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
   <link href="Bootmetro/css/bootstrap-responsive.css" rel="stylesheet">
   <link rel="stylesheet" type="text/css" href="Bootmetro/css/bootmetro.css">
   <link rel="stylesheet" type="text/css" href="Bootmetro/css/bootmetro-responsive.css">
   <link rel="stylesheet" type="text/css" href="Bootmetro/css/bootmetro-icons.css">
   <link rel="stylesheet" type="text/css" href="Bootmetro/css/bootmetro-ui-light.css">
  
   
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
        
           <li><a href="editprofile.php" class="Welcome"><?php echo $_SESSION["AdminID"]; ?></a></li>
          <!-- Read about Bootstrap dropdowns at http://twbs.github.com/bootstrap/javascript.html#dropdowns -->
          <li class="dropdown"> <a href="#" class="dropdown-toggle" data-toggle="dropdown">ตั้งค่า <i class="icon-cogs" ></i></a>
            <ul class="dropdown-menu span3">
             <li class=""> <a href="#" class="nav-header"> หน้าหลัก</a> </li>
  <li ><a href="main.php" > <span class=" icon-menu-3"></span> รายการผู้ดูแลระบบ</a>
    <ul class="">
     <li ><a href="showadmin.php"><span><img src="img/icon/list.png" /></span> รายละเอียดผู้ดูแลระบบ</a></li>
       <li ><a href="addadmin.php"><span><img src="img/icon/friedn added.png" /></span> เพิ่มข้อมูลผู้ดูแลระบบ</a></li>
      <li><a href="editprofile.php"><span ><img src="img/icon/editprofile.png" /></span> แก้ไขข้อมูลส่วนตัว</a></li>
    </ul>
  </li>
  
  <li> <span class="icon-office"></span>  รายการสถานที่ฝึกงาน
    <ul class="">
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
    
    <div class="span3" style="margin-right:-30px;" >
         <ul class="nav metro-nav-list " >
  <!-- Metro Components -->
  <li class=""> <a href="#" class="nav-header " > หน้าหลัก</a> </li>
  <li > <a href="main.php"><span class=" icon-menu-3"></span> รายการผู้ดูแลระบบ</a>
    <ul class="nav">
     <li ><a href="showadmin.php"><span><img src="img/icon/list.png" /></span> รายละเอียดผู้ดูแลระบบ</a></li>
       <li><a href="addadmin.php"><span><img src="img/icon/friedn added.png" /></span> เพิ่มข้อมูลผู้ดูแลระบบ</a></li>
      <li  ><a href="editprofile.php"><span ><img src="img/icon/editprofile.png" /></span> แก้ไขข้อมูลส่วนตัว</a></li>
    </ul>
  </li>
  
  <li> <a href="main.php"><span class="icon-office"></span>  รายการสถานที่ฝึกงาน</a>
    <ul class="nav">
   		  <li class="active"  style="background-color:#d8dfea;"><a href="managecompany.php"><span ><img src="img/icon/1379637604_Company.png" /></span> จัดการข้อมูลสถานฝึกงาน</a></li>
           <li ><a href="addcompany.php"><span><img src="img/icon/addcom.png" /></span> เพิ่มข้อมูลสถานฝึกงาน</a></li>
      <li><a href="editcompany.php"><span><img src="img/icon/editcom.png" /></span > แก้ไขข้อมูลสถานฝึกงาน</a></li>
    </ul>
  </li>
  
  
  
  
</ul>
       </div>
    <div class="span9"> 
         <!--Body content-->
        
         <div id="nav-bar">
          
   <div class="row-fluid">
 
      <div class="span8">
         <div id="header-container">  
          
            <a id="backbutton" class="win-backbutton" href="main.php"> </a>
            <div class="dropdown">
               <h1 class="header-dropdown accent-color  text-info">&nbsp;&nbsp;จัดการข้อมูลสถานที่ฝึกงาน</h1>
       
            </div>
             
         </div>
      </div>
   </div>
         
</div>
      
         <hr />
       
        
  <table class="table-hover text-center">

     <thead class="text-info ">
       <tr>
         <th>ชื่อสถานฝึกงาน</th>
         <th>ที่อยู่สถานฝึกงาน</th>
         <th>ประเภทธุรกิจ</th>
         <th>ประเภทหน่วยงาน</th>
         <th>พื้นที่ตั้ง</th>
         <th>ภูมิภาคที่ตั้ง</th>
           <th>รายละเอียด</th>
             <th class="text-error">ลบที่ฝึกงาน</th>
       </tr>
      
     </thead>
     <tbody>
  
       <tr> 
         <td>yipin tsoi</td>
         <td>123/46 พระราม4 หัวลำโพง ถ.มหาพฤทาราม 10500</td>
           <td>ธรุกิจ IT</td>
                <td>เอกชน</td>
                     <td>นอกเขตอุตาสหกรรม</td>
                          <td>ภาคกลาง</td>
                           <td><a href="">รายละเอียด </a></td>
                           <td><a href="">ลบ... </a></td>
       </tr>
     <tr> 
         <td>มาหาใครtsoi</td>
         <td>123422 พระราม8 หัวลำโพง ถ.มหาพฤทาราม 10500</td>
           <td>ธรุกิจ IT</td>
                <td>เอกชน</td>
                     <td>นอกเขตอุตาสหกรรม</td>
                          <td>ภาคกลาง</td>
                           <td><a href="">รายละเอียด </a></td>
       </tr>
              <tr> 
         <td>yipin tsoi</td>
         <td>123/46 พระราม4 หัวลำโพง ถ.มหาพฤทาราม 10500</td>
           <td>ธรุกิจ IT</td>
                <td>เอกชน</td>
                     <td>นอกเขตอุตาสหกรรม</td>
                          <td>ภาคกลาง</td>
                           <td><a href="">รายละเอียด </a></td>
                           <td><a href="">ลบ... </a></td>
       </tr>
     <tr> 
         <td>มาหาใครtsoi</td>
         <td>123422 พระราม8 หัวลำโพง ถ.มหาพฤทาราม 10500</td>
           <td>ธรุกิจ IT</td>
                <td>เอกชน</td>
                     <td>นอกเขตอุตาสหกรรม</td>
                          <td>ภาคกลาง</td>
                           <td><a href="">รายละเอียด </a></td>
       </tr>
              <tr> 
         <td>yipin tsoi</td>
         <td>123/46 พระราม4 หัวลำโพง ถ.มหาพฤทาราม 10500</td>
           <td>ธรุกิจ IT</td>
                <td>เอกชน</td>
                     <td>นอกเขตอุตาสหกรรม</td>
                          <td>ภาคกลาง</td>
                           <td><a href="">รายละเอียด </a></td>
                           <td><a href="">ลบ... </a></td>
       </tr>
     <tr> 
         <td>มาหาใครtsoi</td>
         <td>123422 พระราม8 หัวลำโพง ถ.มหาพฤทาราม 10500</td>
           <td>ธรุกิจ IT</td>
                <td>เอกชน</td>
                     <td>นอกเขตอุตาสหกรรม</td>
                          <td>ภาคกลาง</td>
                           <td><a href="">รายละเอียด </a></td>
       </tr>
              <tr> 
         <td>yipin tsoi</td>
         <td>123/46 พระราม4 หัวลำโพง ถ.มหาพฤทาราม 10500</td>
           <td>ธรุกิจ IT</td>
                <td>เอกชน</td>
                     <td>นอกเขตอุตาสหกรรม</td>
                          <td>ภาคกลาง</td>
                           <td><a href="">รายละเอียด </a></td>
                           <td><a href="">ลบ... </a></td>
       </tr>
     <tr> 
         <td>มาหาใครtsoi</td>
         <td>123422 พระราม8 หัวลำโพง ถ.มหาพฤทาราม 10500</td>
           <td>ธรุกิจ IT</td>
                <td>เอกชน</td>
                     <td>นอกเขตอุตาสหกรรม</td>
                          <td>ภาคกลาง</td>
                           <td><a href="">รายละเอียด </a></td>
       </tr>
              <tr> 
         <td>yipin tsoi</td>
         <td>123/46 พระราม4 หัวลำโพง ถ.มหาพฤทาราม 10500</td>
           <td>ธรุกิจ IT</td>
                <td>เอกชน</td>
                     <td>นอกเขตอุตาสหกรรม</td>
                          <td>ภาคกลาง</td>
                           <td><a href="">รายละเอียด </a></td>
                           <td><a href="">ลบ... </a></td>
       </tr>
     <tr> 
         <td>มาหาใครtsoi</td>
         <td>123422 พระราม8 หัวลำโพง ถ.มหาพฤทาราม 10500</td>
           <td>ธรุกิจ IT</td>
                <td>เอกชน</td>
                     <td>นอกเขตอุตาสหกรรม</td>
                          <td>ภาคกลาง</td>
                           <td><a href="">รายละเอียด </a></td>
 

       
    
     </tbody>
   </table>
         
       </div><!--Body end span 9--> 
  </div>
   </div>
<footer class="align-center ">
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