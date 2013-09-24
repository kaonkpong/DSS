<?php session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
<link rel="shortcut icon" type="image/x-icon" href="img/favicon.ico">
<title>DSS </title>
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
			jQuery("#signupForm").validationEngine();
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
  <!-- <link rel="stylesheet" type="text/css" href="Bootmetro/css/bootmetro-ui-light.css">
   <link rel="stylesheet" type="text/css" href="Bootmetro/css/datepicker.css">
   
   <script src="Bootmetro/js/modernizr-2.6.2.min.js"></script>-->

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

body{
  width:100%;
  height:100%;
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
.errorlogin{
		background-color:#ffebe8;
	border:1px solid #dd3c10;
	padding:7px 3px;
	text-align:center;
	margin-top:10px;


}
 </style>




<link href="TwitterLogin/front.css" media="screen, projection" rel="stylesheet" type="text/css">




  
</head>
<body> 


<script type="text/javascript">
        // # of images
        var imgCount = 5;
        // image directory
        var dir = 'http://localhost/DSS/img/';
        // random the images
        var randomCount = Math.round(Math.random() * (imgCount - 1)) + 1;
        // array of images & file name
        var images = new Array
                images[1] = "bg1.jpg",
                images[2] = "bg2.jpg",
                images[3] = "bg3.jpg",
                images[4] = "bg4.jpg",
			  	 images[5] = "bg5.jpg",
        document.body.style.backgroundImage = "url(" + dir + images[randomCount] + ")";
		
</script>
<div class="navbar navbar-inverse">
  <div class="navbar-inner" style="-webkit-border-radius: 0; -moz-border-radius: 0; border-radius: 0;">
    <div class="container">
      <a class="btn btn-navbar" data-toggle="collapse" data-target=".nav-collapse">
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </a>
  
 
        <ul class="nav " style="">
         <li> <a class="brand " href="index.php" >DSS<i class="icon-search"></i></a></li>
         <li>   <a class="brand" href="dsssearch.php" >ค้นหา</i></a></li>
         
       </ul>
      
    
      
  
       <?php  

	
	
		 if(!isset($_SESSION["AdminID"]) ){
		include("navnotlogin.php");
		 }
		 else  {
		include("navadmin.php");
		 }
		?>
  

        
         
    </div><!-- /.container -->
  </div><!-- /.navbar-inner -->
</div><!-- /.navbar -->
                     
                   

<div class="container">
      <div class="row-fluid">
 
		
        <div class="span12"><br /><br />
       
 <div class="align-center">       <br />
<h3><p class="lead" style="text-shadow:#EEEEEE; color: #FFF;
  text-shadow:
    1px 1px 0px #000,
    1px -1px 0px #000,
    -1px 1px 0px #000,
    -1px -1px 0px #000;">ยินดีต้อนรับสู่ ระบบสนับสนุนการตัดสินใจ<small> DSS</small> </p></h3>
<h4 style="text-shadow:#EEEEEE; color: #FFF;
  text-shadow:
    1px 1px 0px #000,
    1px -1px 0px #000,
    -1px 1px 0px #000,
    -1px -1px 0px #000;">ค้นหาที่ฝึกงาน ตอนนี้</h4>

</div>
        <form  action="chkregister.php" method="post"   name="Search"  id="signupForm"   >
        <table  class="table table-hover " >
                      
                      <tr>
                          <td colspan="2" class="align-center"><label class="control-label"></label>
                <input  type="text"   name="Search" id="Search" placeholder="Search ...."  class="text-input input-xxlarge"  required> </td>
            
                        </tr>
                       
            <tr>
             <td ><div class="pull-right"><input type="submit" name="submit" id="submit"  value="ค้นหา ชื่อบริษัท"  class="btn-primary"/></div></td>
         <td> <a href="dsssearch.php"><input type="button" name="DSS" id="DSS"  value="ค้นหาด้วย DSS"  class="btn-primary"/></a></td>
            </tr>
                    </table>
                 
                   
      </form>
</div>


  
       <div id="error" class="align-center" >
<?php if($_SESSION["AdminID"]==""){
  print($errorlogin); 
}
  ?>
</div>
    
                    
      </div>
   </div>


   <!--    <script src="TwitterLogin/javascripts/jquery.js" type="text/javascript"></script>    ทับกับ ตัวดักจับค่า --> 
<script type="text/javascript">
        $(document).ready(function() {

            $(".signin").click(function(e) {          
				e.preventDefault();
                $("fieldset#signin_menu").toggle();
				$(".signin").toggleClass("menu-open");
            });
			
			$("fieldset#signin_menu").mouseup(function() {
				return false
			});
			$(document).mouseup(function(e) {
				if($(e.target).parent("a.signin").length==0) {
					$("submit").removeClass("menu-open");
					$("fieldset#signin_menu").hide();
				}
			});			
			
        });
</script>
<script src="TwitterLogin/javascripts/jquery.tipsy.js" type="text/javascript"></script>
<script type='text/javascript'>
    $(function() {
	  $('#forgot_username_link').tipsy({gravity: 'w'});   
    });
  </script>
                    
                               
    <footer>        
            <div class="text-center navbar-fixed-bottom">      
               <font color="#EEEEEE">   
                   <a href="index.php">หน้าแรก</a>
                 <a href="dsssearch.php">ค้นหา</a>
                 <a href="dsssearch.php#collapse2">ข่าวสาร</a>
                 <a href="login.php">บัญชีผู้ใช้</a>
                 <a href="dsssearch.php#collapse3">เกี่ยวกับเรา</a>
 			     <a href="dsssearch.php#collapse4">ติดต่อ</a>
                 <a  href="gallery.php" target="_new">คลังรูปภาพ</a>
                  <br />
             &copy;2013 Decision Support Systems Internship kkc 
                Rajamangala University of Technology Isan Khonkaen Campus<br  /></font>
                <address>
                   <a href="mailto:#">kkc@gmail.com</a>
                </address>
           </div>
            </footer>
                        
 




   <!--[if IE 7]>
   <script type="text/javascript" src="scripts/bootmetro-icons-ie7.js">
   <![endif]-->

   <script type="text/javascript" src="Bootmetro/js/google-code-prettify/prettify.js"></script>
   <script type="text/javascript" src="Bootmetro/js/bootstrap.min.js"></script>
     <script type="text/javascript" src="Frm_bootstrap/js/bootstrap-alert.js"></script>
   <script type="text/javascript" src="Bootmetro/js/bootmetro-panorama.js"></script>
   <script type="text/javascript" src="Bootmetro/js/bootmetro-pivot.js"></script>
   <script type="text/javascript" src="Bootmetro/js/bootmetro-charms.js"></script>
   <script type="text/javascript" src="Bootmetro/js/bootstrap-datepicker.js"></script>
   <script type="text/javascript" src="Bootmetro/js/holder.js"></script>
   <script type="text/javascript" src="Bootmetro/js/Chart.min.js"></script>
   <script type="text/javascript" src="Bootmetro/js/docs.js"></script>
</body>
</html>
