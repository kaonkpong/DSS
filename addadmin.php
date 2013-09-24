<?php session_start();		
                             
if($_SESSION['AdminID'] =="" )
{
	echo "Please Login To System....";
	echo "<meta http-equiv='refresh' content='2;URL=index.php'>";
	exit();
}
require("config.inc.php");

?>
<!DOCTYPE html>
<html lang="en">
   <head>
   <meta charset="utf-8">
   <link rel="shortcut icon" type="image/x-icon" href="img/favicon.ico">
   <title>เพิ่มผู้ดูแลระบบ</title>
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
			jQuery("#AddAdmin").validationEngine();
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
   <!--   <link rel="stylesheet" type="text/css" href="Bootmetro/css/bootmetro-ui-light.css">
   <link rel="stylesheet" type="text/css" href="Bootmetro/css/datepicker.css">
   
   <script src="Bootmetro/js/modernizr-2.6.2.min.js"></script>-->

    <link rel="stylesheet" type="text/css" href="Frm_bootstrap/bootstrap-fileupload.css">

 <script src="Frm_bootstrap/bootstrap-fileupload.js" type="text/javascript" charset="utf-8"></script>
 
   <link rel="stylesheet" type="text/css" href="CSS/border_nav.css">
   <style type="text/css">
.sid {
	color: #F00;
}


/*  check รหัสผู้ดูแลระบบ */

#availability_status {
 font-size:11px;
 margin-left:10px;
}




</style>

<script type="text/javascript">
$(document).ready(function()//When the dom is ready 
{
$("#txtAdminID").change(function() 
{ //if theres a change in the username textbox

var username = $("#txtAdminID").val();//Get the value in the username textbox
if(username.length > 3)//if the lenght greater than 3 characters
{
$("#availability_status").html('<img src="img/Check/loader.gif" align="absmiddle">&nbsp;Checking availability...');
//Add a loading image in the span id="availability_status"

$.ajax({  //Make the Ajax Request
    type: "POST",  
    url: "ajax_check_username.php",  //file name
    data: "txtAdminID="+ username,  //data
    success: function(server_response){  
   
   $("#availability_status").ajaxComplete(function(event, request){ 

	if(server_response == '0')//if ajax_check_username.php return value "0"
	{ 
	$("#availability_status").html('<img src="img/Check/available.png" > <font color="Green"> Available </font>  ');
	//add this image to the span with id "availability_status"
	}  
	else  if(server_response == '1')//if it returns "1"
	{  
	 $("#availability_status").html('<img src="img/Check/not_available.png" > <font color="red">Not Available </font>');
	}  
   
   });
   } 
   
  }); 

}
else
{

$("#availability_status").html('<font color="#cc0000">รหัสผู้ดูแลระบบ สั้น เกินไป !</font>');
//if in case the username is less than or equal 3 characters only 
}



return false;
});

});
</script>

<script type="text/javascript">  
    function chk(){     
        var fty=new Array(".gif",".jpg",".jpeg",".png"); // ประเภทไฟล์ที่อนุญาตให้อัพโหลด     
        var a=document.AddAdmin.filUpload.value; //กำหนดค่าของไฟล์ใหกับตัวแปร a     
        var permiss=0; // เงื่อนไขไฟล์อนุญาต  
        a=a.toLowerCase();      
        if(a !=""){  
            for(i=0;i<fty.length;i++){ // วน Loop ตรวจสอบไฟล์ที่อนุญาต     
                if(a.lastIndexOf(fty[i])>=0){  // เงื่อนไขไฟล์ที่อนุญาต     
                    permiss=1;  
                    break;  
                }else{  
                    continue;  
                }  
            }    
            if(permiss==0){   
                alert("อัพโหลดได้เฉพาะไฟล์ gif,  jpg,  jpeg,  png");       
                return false;                 
            }         
        }          
    }     
</script> 
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
          
           <li><a href="editprofile.php"><?php echo $_SESSION["AdminID"];?></a></li>
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
<div id="alerts-container"></div>
<div id="doc-container" class="container">
     <div class="row-fluid"> 
    <!--Sidebar content-->
    
    <div class="span3" style="margin-right:-30px;" >
         <ul class="nav metro-nav-list " >
  <!-- Metro Components -->
  <li class=""> <a href="#" class="nav-header " > หน้าหลัก</a> </li>
  <li > <a href="main.php"><span class=" icon-menu-3"></span>  รายการผู้ดูแลระบบ</a>
    <ul class="nav">
       <li ><a href="showadmin.php"><span><img src="img/icon/list.png" /></span> รายละเอียดผู้ดูแลระบบ</a></li>
       <li class="active"  style="background-color:#d8dfea;"><a href="addadmin.php"><span><img src="img/icon/friedn added.png" /></span> เพิ่มข้อมูลผู้ดูแลระบบ</a></li>
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
  
  
  
  
</ul>
       </div>
    <div class="span9 borderC"> 
         <!--Body content-->
          <form action="saveadmin.php" method="post"   name="AddAdmin"  id="AddAdmin"   enctype="multipart/form-data" onsubmit="return chk();">
         
         <div id="nav-bar">
           <div class="fileupload fileupload-new pull-right" data-provides="fileupload">
                      <div class="fileupload-new thumbnail"><img src="" class="img-rounded"  style="width: 180px; height: 180px;"></div>
                      <div class="fileupload-preview fileupload-exists thumbnail" style="max-width: 180px; max-height: 180px; line-height: 20px;"></div>
                      <div>
                        <span class="btn btn-file"><span class="fileupload-new">Select image</span><span class="fileupload-exists">Change</span>
                      <input type="file" name="filUpload" id="filUpload">
                      </span>
                        <a href="#" class="btn fileupload-exists" data-dismiss="fileupload">Remove</a>
                      </div>
                    </div>
   <div class="row">
 
      <div class="span8">
         <div id="header-container">  
          
            <a id="backbutton" class="win-backbutton" href="main.php"> </a>
            <div class="dropdown">
               <h1 class="header-dropdown accent-color  text-info">&nbsp; เพิ่มข้อมูลผู้ดูแลระบบ</h1>
       
            </div>
             
         </div>
         			<div id="statusupdate" class="align-center" ><br><br>
							<?php if($_SESSION[Save]){
                              print($Save); 
                              session_unregister(Save);
                            }
                            if($error){
                                 print($error); 
								 session_unregister(error);
                            }
                              ?>
                            </div>
      </div>
   </div>
         
</div>
      
     <hr />

     
       
        <table  class="table table-hover ">
                      <tbody>
       
                  <tr>
 <td >   <label class="control-label"><span class="icon-vcard"></span> รหัสผู้ดูแลระบบ</label>
                <input type="text" id="txtAdminID" name="txtAdminID" placeholder="AdminID"  class="validate[required] text-input " maxlength="13"></td>
     <td><label class="control-label"> &nbsp;</label><span id="availability_status"></span></td>
  </tr>
  
                        
                   
          
          				<tr>
                 <td width="30%"><label class="control-label " ><span class="icon-unlocked-2"></span> รหัสผ่าน</label>
                <input  class="validate[required,custom[onlyLetterNumber],minSize[5]] text-input " type="password" name="Password" id="Password" placeholder="Password..."></td>
                 <td><label class="control-label  " > ยืนยันรหัสผ่าน</label>
                <input  class="validate[required,equals[Password]] text-input " type="password" name="password2" id="password2" placeholder="Confirm Password..."/></td>
              
               </tr>
        
               
               
            <tr>
                          <td><label class="control-label" for="input">ชื่อ</label>
                <input type="text" name="txtName" placeholder="Name"  class="validate[required,minSize[5]  text-input"   \></td>
                          <td ><label class="control-label" for="input">นามสกุล</label>
                <input type="text" name="txtLastName" placeholder="LastName" class="validate[required,minSize[5]  text-input" \ ></td>
                        </tr>
            <tr>
                        <td ><label class="radio ">
   <input type="radio" name="Gender"  value="men"  class="validate[required] radio">
   <span class="metro-radio">เพศชาย</span>
</label></td>
                          <td><label class="radio">
   <input type="radio" name="Gender"  value="women" class="validate[required] radio">
   <span class="metro-radio">เพศหญิง</span>
</label></td>

                        </tr>
               <tr>
            <td colspan="2"><label class="control-list" for="Major">สาขา</label>
                 <select class="span3 validate[required]"  name="Major">
                     <option value="">เลือกสาขา</option>
                  <option value="BIS">ระบบสารสนเทศ</option>
                <option value="AC">การบัญชี</option>
                <option value="BMK">การตลาด</option>
                <option value="BMG">การจัดการ</option>
              </select></td>
          
          </tr>
          
           <tr>
            <td colspan="2"><label class="control-label" for="input"><span class="icon-home-2"></i></span> ที่อยู่</label>
                 <textarea rows="4" value="kanokpong" name="txtAddress" class="validate[required] text-input input-xlarge" placeholder="Address"></textarea></td>
          
          </tr>
          <tr>
   <td>   <label class="control-label "><span class="icon-envelope"></span> บัญชีผู้ใช้</label>
                <input   name="txtEmail"  type="text"    class="validate[required,custom[email]] text-input  " id="email" placeholder="Email">   </td>
   
  </tr>    
           <tr>
            <td><label class="control-label" for="input"><span class="add-on"><i class="icon-phone"></i></span>โทรศัพท์</label>
              <input type="text" name="txtPhone" placeholder="Phone"  class="validate[required,custom[phone]] text-input"></td>
           
          </tr>
           <tr>
            <td><label class="control-label" for="input"> สถานะตำแหน่ง</label>
              <input type="text" name="txtStatus" placeholder="Status"  class="validate[required] text-input"></td>
           
          </tr>
          
          <tr>
          <td colspan="2">
              <div class="form-actions">
                <button type="submit"  class="btn-primary">บันทึก</button>
                <button type="reset" class="btn">ยกเลิก</button>
              </div>
              </td>
        
          </tr>
     
          </tbody>
                    </table>
               
      </form>
         
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