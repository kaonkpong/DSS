<?php session_start();		
                             
if($_SESSION['AdminID'] =="" )
{
	echo "Please Login To System....";
	echo "<meta http-equiv='refresh' content='2;URL=index.php'>";
	exit();
}

?>
<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
<link rel="shortcut icon" type="image/x-icon" href="img/favicon.ico">
<title>เพิ่มสถานฝึกงาน</title>
<meta name="viewport" content="width=device-width, initial-scale=1.0">



<!--jQuery ตรวจสอบข้อมูลก่อน submit-->
<link rel="stylesheet" href="jQuery-Validation-Engine-master/css/validationEngine.jquery.css" type="text/css"/>
	
	<script src="jQuery-Validation-Engine-master/js/jquery-1.8.2.min.js" type="text/javascript">
	</script>
	<script src="jQuery-Validation-Engine-master/js/languages/jquery.validationEngine-en.js" type="text/javascript" charset="utf-8">
	</script>
	<script src="jQuery-Validation-Engine-master/js/jquery.validationEngine.js" type="text/javascript" charset="utf-8">
	</script>
	

    	<script>
			jQuery(document).ready(function() {
				// binds form submission and fields to the validation engine
				jQuery("#frmCompany").validationEngine({
				
				});
			
			});
		</script>


<link rel="stylesheet" type="text/css" href="Bootmetro/css/bootmetro.css">
<link rel="stylesheet" type="text/css" href="Bootmetro/css/bootmetro-responsive.css">
<link rel="stylesheet" type="text/css" href="Bootmetro/css/bootmetro-icons.css">
<link rel="stylesheet" type="text/css" href="Bootmetro/css/datepicker.css">
<!--<script src="Bootmetro/js/modernizr-2.6.2.min.js"></script>-->
<link rel="stylesheet" type="text/css" href="Bootmetro/css/bootmetro-ui-light.css">







<script>
$(document).ready(function(){

	// hide #back-top first
	$("#back-top").hide();
	
	// fade in #back-top
	$(function () {
		$(window).scroll(function () {
			if ($(this).scrollTop() > 100) {
				$('#back-top').fadeIn();
			} else {
				$('#back-top').fadeOut();
			}
		});

		// scroll body to 0px on click
		$('#back-top a').click(function () {
			$('body,html').animate({
				scrollTop: 0
			}, 800);
			return false;
		});
	});

});
</script>
<style>
/*
Back to top button 
*/
#back-top {
	position: fixed;
	bottom: 30px;
	right: 0px;
	margin-right: 50px;
}
#back-top a {
	width: 108px;
	display: block;
	text-align: center;
	font: 11px/100% Arial, Helvetica, sans-serif;
	text-transform: uppercase;
	text-decoration: none;
	color: #bbb;
	/* background color transition */
	-webkit-transition: 1s;
	-moz-transition: 1s;
	transition: 1s;
}
#back-top a:hover {
	color: #000;
}
/* arrow icon (span tag) */
#back-top span {
	width: 108px;
	height: 108px;
	display: block;
	margin-bottom: 7px;
	background: #ddd url(img/up-arrow.png) no-repeat center center;
	/* rounded corners */
	-webkit-border-radius: 15px;
	-moz-border-radius: 15px;
	border-radius: 15px;
	/* background color transition */
	-webkit-transition: 1s;
	-moz-transition: 1s;
	transition: 1s;
}
#back-top a:hover span {
	background-color: #777;
}
</style>


<style type="text/css">
a:link {
	color: #24A0DA;
}
a:visited {
	color: #24A0DA;
}
</style>
</head>
<body id="top">
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
             <li class="">  หน้าหลัก </li>
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
<div id="alerts-container" ></div>
<div id="pagewrap" class="container">
  <div class="row-fluid"> 
    <!--Sidebar content-->
    
    <div class="span3" style="margin-right:-30px;" >
         <ul class="nav metro-nav-list " >
  <!-- Metro Components -->
  <li class=""> <a href="#" class="nav-header " > หน้าหลัก</a> </li>
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
           <li class="active"  style="background-color:#d8dfea;"><a href="addcompany.php"><span><img src="img/icon/addcom.png" /></span> เพิ่มข้อมูลสถานฝึกงาน</a></li>
      <li><a href="editcompany.php"><span><img src="img/icon/editcom.png" /></span > แก้ไขข้อมูลสถานฝึกงาน</a></li>
    </ul>
  </li>
  
  
  
  
</ul>
       </div>
    <div class="span9  borderC" > 
      <!--Body content-->
      <div id="nav-bar">
   <div class="row">
      <div class="span9">
         <div id="header-container">
            <a id="backbutton" class="win-backbutton" href="main.php"> </a>
            <div class="dropdown">
               <h1 class="header-dropdown accent-color  text-info"> &nbsp; เพิ่มข้อมูลสถานฝึกงาน</h1>
            </div>
         </div>
      </div>
   </div>
</div>

      <hr />
      

       <br>
      <form id="frmCompany" action="addcompany.php" method="post" enctype="multipart/form-data" class="span10">
        <table  class="table table-hover ">
          <tbody>
            <tr>
              <td ><label class="control-label" >บัญชีผู้ดูแลระบบ</label>
                <input type="text" name="txtAdminID"  placeholder="AdminID" maxlength="13" 
               class="validate[required,custom[number],minSize[13]] text-input" disabled> </td>
              <td ></td>
              </tr>
            <tr>
              <td><label class="control-label "  >ชื่อสถานฝึกงาน</label>
                <input type="text" name="txtCompanyName"  placeholder="CompanyName" class="validate[required] text-input input-xlarge" maxlength="30"></td>
              <td></td>
            </tr>
            
         
            
            <tr>
              <td colspan="2" ><label class="control-label">ที่อยู่สถานฝึกงาน</label>
                <textarea name="CompanyAddress"  rows="5"  placeholder="CompanyAddress" class="validate[required] text-input " style="width:400px;"></textarea></td>
              <td></td>
            </tr>
            
             <th colspan="2">ประเภทธุรกิจ</th>
                  <tr>
                    <td colspan="2"><select  name="JobType" id="JobType" style="width:250px;"  class="validate[required]">
               
                      <option value="">เลือกประเภทธุรกิจ....</option>
                              <option value="Manufac">ผู้ผลิต</option>
                              <option value="Service">ธุรกิจบริการ</option>
                              <option value="">ร้านค้าปลีกและผู้จัดจำหน่าย</option>
                              <option value="">ธุรกิจเกษตรกรรมและเหมืองแร่</option>
                              <option value="">สถาบันการเงิน</option>
                               <option value="">ธุรกิจสารสนเทศ</option>
                                <option value="">สาธารณูปโภค</option>
                                 <option value="">อสังหาริมทรัพย์</option>
                                   <option value="">ธุรกิจขนส่ง</option>
                                     <option value="">ธุรกิจรถยนต์</option>
                                        <option value="">ธุรกิจที่ปรึกษาธุรกิจ</option>
                            </select></td>
                  </tr>
                  
                    <th colspan="2">ประเภทหน่วยงาน</th>
                  <tr>
                    <td ><label class="radio">
                        <input type="radio" name="corporation"  value="1"  class="validate[required] radio" >
                        <span class="metro-radio">ราชการ</span> </label></td>
                    <td><label class="radio">
                        <input type="radio" name="corporation"  value="2"  class="validate[required] radio">
                        <span class="metro-radio">เอกชน</span> </label></td>
                  </tr>
                  <tr>
                    <td><label class="radio">
                        <input type="radio" name="corporation"  value="3"  class="validate[required] radio">
                        <span class="metro-radio">รัฐวิสาหกิจ</span> </label></td>
                    <td><label class="radio">
                        <input type="radio" name="corporation"  value="4"  class="validate[required] radio">
                        <span class="metro-radio">องค์กรไม่แสวงผลกำไร</span> </label></td>
                  </tr>
                  
                    <th colspan="2">พื้นที่ตั้ง</th>
                  <tr>
                    <td><label class="radio">
                        <input type="radio" name="Location"  value="1"  class="validate[required] radio">
                        <span class="metro-radio">ในเขตอุตสาหกรรม</span> </label></td>
                    <td><label class="radio">
                        <input type="radio" name="Location"  value="2"  class="validate[required] radio">
                        <span class="metro-radio">นอกเขตอุตสาหกรรม</span> </label></td>
                        
                  </tr>
                  
                    <th colspan="3">ภูมิภาคที่ตั้ง</th>
                      <tr>
                          <td><label class="radio  span12">
                              <input type="radio" name="zone"  value="1"  class="validate[required] radio">
                              <span class="metro-radio ">ภาคกลาง</span> </label></td>
                          <td><label class="radio  span12">
                              <input type="radio" name="zone"  value="2"  >
                              <span class="metro-radio ">ภาคเหนือ</span> </label></td>
                          <td><label class="radio  span12 ">
                              <input type="radio" name="zone"  value="3"  >
                              <span class="metro-radio ">ภาคตะวันออก</span> </label></td>
                        </tr>
                    <tr>
                          <td><label class="radio  span12">
                              <input type="radio" name="zone"  value="4"  >
                              <span class="metro-radio ">ภาคตะวันตก</span> </label></td>
                          <td><label class="radio  span12">
                              <input type="radio" name="zone"  value="5"  >
                              <span class="metro-radio ">ภาคใต้</span> </label></td>
                          <td><label class="radio  span12 ">
                              <input type="radio" name="zone"  value="6"  >
                              <span class="metro-radio">ภาคตะวันออกเฉียงเหนือ</span> </label></td>
                        </tr>
                  
                  
            <tr>
              <td><label class="control-label" for="input">เบอร์โทรติดต่อ </label>
                <input type="text" name="txtCompanyContact" placeholder="CompanyContact" class="validate[required,custom[phone]] text-input"></td>

              <td></td>
            </tr>
            
         
         
        
       
       
         
                       <th colspan="3">กระบวนการวัดพนักงานในสถานประกอบการ (ทางสังคม)</th>
            <tr>
            
            <td>
           <label class="checkbox  span12">
                        <input type="checkbox" name="Orientation"  value="1"  >
                        <span class="metro-checkbox ">มีการการปฐมนิเทศก่อนการฝึกงาน</span> </label>
 
            </td>
                  <td>
           <label class="checkbox  span12">
                        <input type="checkbox" name="Paper"  value="1"  >
                        <span class="metro-checkbox ">เอกสารประกอบการฝึกงาน</span> </label>
 
            </td>
                  <td>
           <label class="checkbox  span12 ">
                        <input type="checkbox" name="Closing"  value="1"  >
                        <span class="metro-checkbox ">ปัจฉิมนิเทศหลังการฝึกงาน</span> </label>
 
            </td>
            </tr>
                        
            <td>
           <label class="checkbox  span12">
                        <input type="checkbox" name="Certificate"  value="1"  >
                        <span class="metro-checkbox ">วุฒิบัตรรับรองการฝึกงาน</span> </label>
 
            </td>
                  <td>
           <label class="checkbox  span12">
                        <input type="checkbox" name="EvaluationTraining"  value="1"  >
                        <span class="metro-checkbox ">การประเมินผลเป็นระยะ
</span> </label>
 
            </td>
                  <td>
           <label class="checkbox  span12 ">
                        <input type="checkbox" name="mentor"  value="1"  >
                        <span class="metro-checkbox ">มีระบบพี่เลี้ยง</span> </label>
 
            </td>
            </tr>
            
            <th colspan="3">ระยะเวลาการฝึกงาน</th>
                  <tr>
                    <td><label class="radio">
                        <input type="radio" name="InternshipPeriod"  value="1"  class="validate[required] radio" >
                        <span class="metro-radio">ภาคเรียนที่1</span> </label></td>
                    <td><label class="radio">
                        <input type="radio" name="InternshipPeriod"  value="2"  class="validate[required] radio">
                        <span class="metro-radio">ภาคเรียนที่2</span> </label></td>
             
                    <td><label class="radio">
                        <input type="radio" name="InternshipPeriod"  value="3"  class="validate[required] radio">
                        <span class="metro-radio">ภาคเรียนฤดูร้อน</span> </label></td>
                   
                  </tr>
                  
                  
                      <th colspan="3">สวัสดิการ  (ด้านร่างกาย)</th>
                                    
            <tr>
           
            <td>
           <label class="checkbox  span12">
                        <input type="checkbox" name="Accommodation"  value="1"  >
                        <span class="metro-checkbox ">ที่พัก</span> </label>
 
            </td>
                  <td>
           <label class="checkbox  span12">
                        <input type="checkbox" name="Food"  value="1"  >
                        <span class="metro-checkbox ">อาหาร</span> </label>
 
            </td>
        <td></td>
            </tr>
                              <th colspan="2">สวัสดิการ  (ด้านความปลอดภัย)</th>
                              <tr>
                                      <td>
                               <label class="checkbox  span12 ">
                                            <input type="checkbox" name="Security"  value="1"  >
                                            <span class="metro-checkbox ">มีการประกันความปลอดภัยระหว่างฝึกงาน</span> </label>
                     
                                </td>
                                <td>
                               <label class="checkbox  span12">
                                            <input type="checkbox" name="Allowance"  value="1"  >
                                            <span class="metro-checkbox ">มีเบีี้ยเลี้ยงค่าตอบแทนให้นักศึกษา</span> </label>
                     
                                </td>
                                      <td>
                               <label class="checkbox  span12">
                                            <input type="checkbox" name="Uniform"  value="1"  >
                                            <span class="metro-checkbox ">มีชุดปฏิบัติงานให้นักศึกษา
                    </span> </label>
                     
                               </td>
                               </tr>
            </tr>
       </tbody>
       </table>
           
                      
              
                        <div class="form-actions align-center">
                    <button type="submit" class="btn-info">บันทึก</button>
                         <button type="reset" class="btn">ยกเลิก</button>
                        
                </div>
                        
      </form>
        
    </div>
    <p id="back-top" > <a href="#top" ><span class="pull-right"></span>Back to Top</a> </p>
    
    <!--Body end--> 
  </div>
</div>
<footer class="align-center">
     <?php require("footer.php");?>
   </footer>
  </div>
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
