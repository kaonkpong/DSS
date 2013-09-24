<?php session_start();

?>
<!DOCTYPE html>
<html lang="en">
  <head>
  <meta charset="utf-8">
  <link rel="shortcut icon" type="image/x-icon" href="img/favicon.ico">
  <title>DssSearch</title>
  <script src="jQuery-Validation-Engine-master/js/jquery-1.8.2.min.js" type="text/javascript"></script>
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" type="text/css" href="Bootmetro/css/bootmetro.css">
  <link rel="stylesheet" type="text/css" href="Bootmetro/css/bootmetro-responsive.css">
  <link rel="stylesheet" type="text/css" href="Bootmetro/css/bootmetro-icons.css">
  <link rel="stylesheet" type="text/css" href="Bootmetro/css/bootmetro-ui-light.css">
  <link rel="stylesheet" type="text/css" href="Bootmetro/css/datepicker.css">
  <script src="Bootmetro/js/modernizr-2.6.2.min.js"></script>
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
  <link href="TwitterLogin/front.css" media="screen, projection" rel="stylesheet" type="text/css">

  <!-- youtube progress bar-->

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
	-moz-transition:width 500ms ease-out, opacity 400ms linear;
	-ms-transition:width 500ms ease-out, opacity 400ms linear;
	-o-transition:width 500ms ease-out, opacity 400ms linear;
	-webkit-transition:width 500ms ease-out, opacity 400ms linear;
	transition:width 500ms ease-out, opacity 400ms linear
}
#progress.done {
	opacity:0
}
#progress dd, #progress dt {
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
	clip:rect(-6px, 22px, 14px, 10px)
}
#progress dt {
	opacity:1;
	width:180px;
	right:-80px;
	clip:rect(-6px, 90px, 14px, -6px)
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
#progress.waiting dd, #progress.waiting dt {
	-moz-animation:pulse 2s ease-out 0s infinite;
	-ms-animation:pulse 2s ease-out 0s infinite;
	-o-animation:pulse 2s ease-out 0s infinite;
	-webkit-animation:pulse 2s ease-out 0s infinite;
	animation:pulse 2s ease-out 0s infinite
}
</style>
  <!--  youtube load bar -->
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

  <!--jQuery ตรวจสอบข้อมูลก่อน submit-->

  <link rel="stylesheet" href="jQuery-Validation-Engine-master/css/validationEngine.jquery.css" type="text/css"/>
  <script src="jQuery-Validation-Engine-master/js/languages/jquery.validationEngine-en.js" type="text/javascript" charset="utf-8">	</script>
  <script src="jQuery-Validation-Engine-master/js/jquery.validationEngine.js" type="text/javascript" charset="utf-8"></script>
  <script src="jQuery-Validation-Engine-master/js/languages/jquery.validationEngine-en.js" type="text/javascript" charset="utf-8"></script>
  <script>
			jQuery(document).ready(function() {
				// binds form submission and fields to the validation engine
				jQuery("#DSSSEARCH").validationEngine({
					prettySelect : true,
					useSuffix: "_chzn"
					//promptPosition : "bottomLeft"
				});
			
			});
		</script>
  <style type="text/css">
.zebra {
	background-color: #efefef;
}
img.flag {
	height: 10px;
	width: 15px;
	padding-right: 10px;
}
.movie-result td {
	vertical-align: top
}
.movie-image {
	width: 60px;
}
.movie-image img {
	height: 80px;
	width: 60px;
}
.movie-info {
	padding-left: 10px;
	vertical-align: top;
}
.movie-title {
	font-size: 1.2em;
	padding-bottom: 15px;
}
.movie-synopsis {
	font-size: .8em;
	color: #888;
}
.select2-highlighted .movie-synopsis {
	font-size: .8em;
	color: #eee;
}
.bigdrop.select2-container .select2-results {
	max-height: 300px;
}
.bigdrop .select2-results {
	max-height: 300px;
}
</style>
  <script type="text/javascript" async src="select2-3.4.2/select2_locale_en.js.template"></script>
  <link rel="stylesheet" href="select2-3.4.2/select2.css" type="text/css"/>
  <script src="select2-3.4.2/select2.js"></script>
  <script id="script_e9">
    $(document).ready(function() {
        $("#e9").select2();
    });
</script>

  <!-- Checkbox iphone -->
  <script src="tdreyno-iphone-style-checkboxes/jquery/iphone-style-checkboxes.js" type="text/javascript" charset="utf-8"></script>
  <link rel="stylesheet" href="tdreyno-iphone-style-checkboxes/style.css" type="text/css" media="screen" charset="utf-8" />
  <script type="text/javascript" charset="utf-8">
    $(window).load(function() {
     $(':checkbox').iphoneStyle( {
		 
		  checkedLabel: 'YES',
  uncheckedLabel: 'NO'
  });
     

   
    });
  </script>
  </head>

  <body id="top">
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
		 else {
		include("navadmin.php");
		 }
		?>
  

        
         
    </div><!-- /.container -->
  </div><!-- /.navbar-inner -->
</div>
<div id="alerts-container"></div>
<div id="progress" class="waiting"> </div>
<div id="doc-container" class="container">
<div class="row-fluid">
<!--Sidebar content-->

<div class="bs-docs-sidebar span2">
    <ul class="nav metro-nav-list ">
    <!-- Metro Components -->
    <li class=""> <a  class="nav-header">หน้าหลัก</a> </li>
    <li class="active"> <a href="dsssearch.php">รายการ</a>
        <ul class="nav">
        <li class=""><a class="accordion-toggle" data-toggle="collapse" data-parent="#accordion2" href="#collapseOne"><span><img src="img/icon/iconsearch.png" /></span> ค้นหาข้อมูล</a></li>
        <li class=""><a class="accordion-toggle" data-toggle="collapse" data-parent="#accordion2" href="#collapse2"><span ><img src="img/icon/notifications.png" /></span> ข่าวสาร</a></li>
        <li class=""> <a class="accordion-toggle" data-toggle="collapse" data-parent="#accordion2" href="#collapse3"><span ><img src="img/icon/about.png" /></span> เกี่ยวกับเรา</a></li>
        <li class=""><a class="accordion-toggle" data-toggle="collapse" data-parent="#accordion2" href="#collapse4"><span ><img src="img/icon/groups.png" /></span> ติดต่อ</a></li>
        <li class=""><a  href="gallery.php" target="_new"><span><img src="img/icon/photos icon.png" /></span> คลังรูปภาพ</a></li>
      </ul>
    </ul>
  </div>
<div class="span9 BorderC">
<!--Body content-->
<div class="row-fluid">
<div class="accordion" id="accordion2">
<div class="accordion-group ">
    <div class="accordion-heading"> <a class="accordion-toggle" data-toggle="collapse" data-parent="#accordion2" href="#collapseOne">
      <h3><span><img src="img/icon/iconsearch.png" /></span> ค้นหาข้อมูลสถานฝึกงาน</h3>
      </a> </div>
    <div id="collapseOne" class="accordion-body collapse in">
    <div class="accordion-inner">
        <hr />
        <blockquote class="text-success">
        	โปรดเลือกปัจจัยที่ต้องการเป็น YES 
        </blockquote>
        <form  class="form-wrapper"  id="DSSSEARCH" action="dssresult.php" method="post" enctype="multipart/form-data" >
        <table  class="table table-hover">
            <tbody>
          
            <th colspan="3" ><h4>ประเภทธุรกิจ (เลือกธุรกิจได้มากกว่า 1 ประเภท) </h4></th>
          <tr>
            <td colspan="3"><select data-placeholder="เลือกประเภท ธุรกิจ..."     style="width:550px;" name="CatBusiness[]" id="e9"  multiple required>
                <option value="all" >ทุกประเภท</option>
                <option value="1">ผู้ผลิต</option>
                <option value="2">ธุรกิจบริการ</option>
                <option value="3">ร้านค้าปลีกและผู้จัดจำหน่าย</option>
                <option value="4">ธุรกิจเกษตรกรรมและเหมืองแร่</option>
                <option value="5">สถาบันการเงิน</option>
                <option value="6">ธุรกิจสารสนเทศ</option>
                <option value="7">สาธารณูปโภค</option>
                <option value="8">อสังหาริมทรัพย์</option>
                <option value="9">ธุรกิจขนส่ง</option>
                <option value="10">ธุรกิจรถยนต์</option>
                <option value="11">ธุรกิจที่ปรึกษาธุรกิจ</option>
              </select></td>
          </tr>
            
            <th colspan="2"><h4>ประเภทหน่วยงาน</h4></th>
          <tr>
            <td><label class="checkbox">
                <input type="checkbox" name="corporation"  value="1"  >
                <span class="metro-checkbox">ราชการ</span> </label></td>
            <td><label class="checkbox">
                <input type="checkbox" name="corporation"  value="2" >
                <span class="metro-checkbox">เอกชน</span> </label></td>
          </tr>
            <tr>
            <td><label class="checkbox">
                <input type="checkbox" name="corporation"  value="3"  >
                <span class="metro-checkbox">รัฐวิสาหกิจ</span> </label></td>
            <td><label class="checkbox span12">
                <input type="checkbox" name="corporation"  value="4">
                <span class="metro-checkbox ">องค์กรไม่แสวงผลกำไร</span> </label></td>
          </tr>
            
            <th colspan="2"><h4>พื้นที่ตั้ง</h4></th>
          <tr>
            <td><label class="checkbox span12">
                <input type="checkbox" name="Location"  value="1"  >
                <span class="metro-checkbox">ในเขตอุตสาหกรรม</span> </label></td>
            <td><label class="checkbox span12">
                <input type="checkbox" name="Location"  value="2">
                <span class="metro-checkbox">นอกเขตอุตสาหกรรม</span> </label></td>
          </tr>
            
            <th colspan="2"><h4>ภูมิภาคที่ตั้ง</h4></th>
          <tr>
            <td><label class="checkbox  span12">
                <input type="checkbox" name="Midland"  value="1"  >
                <span class="metro-checkbox ">ภาคกลาง</span> </label></td>
            <td><label class="checkbox  span12">
                <input type="checkbox" name="North"  value="2"  >
                <span class="metro-checkbox ">ภาคเหนือ</span> </label></td>
            <td><label class="checkbox  span12 ">
                <input type="checkbox" name="East"  value="3"  >
                <span class="metro-checkbox ">ภาคตะวันออก</span> </label></td>
          </tr>
            <tr>
            <td><label class="checkbox  span12">
                <input type="checkbox" name="West"  value="4"  >
                <span class="metro-checkbox ">ภาคตะวันตก</span> </label></td>
            <td><label class="checkbox  span12">
                <input type="checkbox" name="South"  value="5"  >
                <span class="metro-checkbox ">ภาคใต้</span> </label></td>
            <td><label class="checkbox  span12 ">
                <input type="checkbox" name="Northeast"  value="6"  >
                <span class="metro-checkbox ">ภาคตะวันออกเฉียงเหนือ</span> </label></td>
          </tr>
            
            <th colspan="2"><h4>กระบวนการวัดพนักงานในสถานประกอบการ (ทางสังคม) </h4></th>
          <tr>
            <td><label class="checkbox  span12">
                <input type="checkbox" name="Orientation"  value="1"  >
                <span class="metro-checkbox">มีการการปฐมนิเทศก่อนการฝึกงาน</span> </label></td>
            <td><label class="checkbox  span12">
                <input type="checkbox" name="Paper"  value="1"  >
                <span class="metro-checkbox ">เอกสารประกอบการฝึกงาน</span> </label></td>
            <td><label class="checkbox  span12 ">
                <input type="checkbox" name="Closing"  value="1"  >
                <span class="metro-checkbox">ปัจฉิมนิเทศหลังการฝึกงาน</span> </label></td>
          </tr>
            <tr>
            <td><label class="checkbox  span12">
                <input type="checkbox" name="Certificate"  value="1"  >
                <span class="metro-checkbox ">วุฒิบัตรรับรองการฝึกงาน</span> </label></td>
            <td><label class="checkbox  span12">
                <input type="checkbox" name="EvaluationTraining"  value="1"  >
                <span class="metro-checkbox ">การประเมินผลเป็นระยะ </span> </label></td>
            <td><label class="checkbox  span12">
                <input type="checkbox" name="mentor"  value="1"  >
                <span class="metro-checkbox">มีระบบพี่เลี้ยง</span> </label></td>
          </tr>
            
            <th colspan="2"><h4> ระยะเวลาการฝึกงาน </h4></th>
          <tr>
            <td><label class="checkbox span6">
                <input type="checkbox" name="InternshipPeriod"  value="1"  >
                <span class="metro-checkbox">ภาคเรียนที่1</span> </label></td>
            <td><label class="checkbox span6">
                <input type="checkbox" name="InternshipPeriod"  value="2" >
                <span class="metro-checkbox">ภาคเรียนที่2</span> </label></td>
            <td><label class="checkbox span6">
                <input type="checkbox" name="InternshipPeriod"  value="3"  >
                <span class="metro-checkbox">ภาคฤดูร้อน</span> </label></td>
          </tr>
            
            <th colspan="2"><h4>สวัสดิการ  (ด้านร่างกาย) </h4></th>
          <tr>
            <td><label class="checkbox  span12">
                <input type="checkbox" name="Accommodation"  value="1"  >
                <span class="metro-checkbox ">ที่พัก</span> </label></td>
            <td><label class="checkbox  span12">
                <input type="checkbox" name="Food"  value="1"  >
                <span class="metro-checkbox ">อาหาร</span> </label></td>
            <td></td>
          </tr>
            
            <th colspan="2"> <h4>สวัสดิการ  (ด้านความปลอดภัย) </h4></th>
          <tr>
            <td><label class="checkbox  span12">
                <input type="checkbox" name="Security"  value="1"  >
                <span class="metro-checkbox">มีการประกันความปลอดภัยระหว่างฝึกงาน</span> </label></td>
            <td><label class="checkbox  span12">
                <input type="checkbox" name="Allowance"  value="1"  >
                <span class="metro-checkbox">มีเบีี้ยเลี้ยงค่าตอบแทนให้นักศึกษา</span> </label></td>
            <td><label class="checkbox  span12">
                <input type="checkbox" name="Uniform"  value="1"  >
                <span class="metro-checkbox">มีชุดปฏิบัติงานให้นักศึกษา </span> </label></td>
          </tr>
              </tbody>
            
          </table>
        <div class="form-actions align-center">
            <button type="submit" class="btn btn-info" id="submit">ค้นหาด้วย Dss</button>
            <button type="reset" class="btn">ยกเลิก</button>
          </div>
      </form>
      </div>
  </div>
  </div>
<div class="accordion-group">
<div class="accordion-heading"><a class="accordion-toggle" data-toggle="collapse" data-parent="#accordion2" href="#collapse2">
  <h3><span class=""><img src="img/icon/notifications.png" /></span> ข่าวสารใหม่</h3>
  </a></div>
<div id="collapse2" class="accordion-body collapse">
<div class="accordion-inner">
<?php include("news.php");?>
</div>
</div>
</div>
<div class="accordion-group">
<div class="accordion-heading"><a class="accordion-toggle" data-toggle="collapse" data-parent="#accordion2" href="#collapse3">
  <h3><span><img src="img/icon/about.png" /></span>เกี่ยวกับเรา</h3>
  </a></div>
<div id="collapse3" class="accordion-body collapse">
<div class="accordion-inner">
<?php include("aboutus.php");?>
</div>
</div>
</div>
<div class="accordion-group">
<div class="accordion-heading"><a class="accordion-toggle" data-toggle="collapse" data-parent="#accordion2" href="#collapse4">
  <h3><span><img src="img/icon/groups.png" /></span>ติดต่อ</h3>
  </a></div>
<div id="collapse4" class="accordion-body collapse">
<div class="accordion-inner">
<?php include("contact.php");?>
</div>
</div>
</div>
</div>
</div>
<!--Body  span9-->

</div>
<!--Body end Row-->
<p id="back-top" ><a href="#top" ><span class="pull-right"></span>Back to Top</a></p>
</div>
</div>
<footer class="align-center">
  <ul class="breadcrumb ">
    <li class="active"><a href="index.php">หน้าแรก</a><span class="divider">/</span></li>
    <li class=""><a class="accordion-toggle" data-toggle="collapse" data-parent="#accordion2" href="#collapseOne"><span class="icon-search-4"></span>ค้นหาข้อมูล</a><span class="divider">/</span></li>
    <li class=""><a class="accordion-toggle" data-toggle="collapse" data-parent="#accordion2" href="#collapse2"><span class="icon-newspaper"></span>ข่าวสาร</a><span class="divider">/</span></li>
    <li class=""><a class="accordion-toggle" data-toggle="collapse" data-parent="#accordion2" href="#collapse3"><span class=" icon-history"></span>เกี่ยวกับเรา</a><span class="divider">/</span></li>
    <li class=""><a class="accordion-toggle" data-toggle="collapse" data-parent="#accordion2" href="#collapse4"><span class="icon-users-2"></span>ติดต่อ</a><span class="divider">/</span></li>
    <li class=""><a href="login.php" target=""><span class=" icon-login"></span>บัญชีผู้ใช้</a><span class="divider">/</span></li>
    <li class=""><a  href="gallery.php" target=""><span class="icon-pictures"></span>คลังรูปภาพ</a></li>
  </ul>
  <font color="#3b5998">&copy;2013 Decision Support Systems Internship kkc 
  Rajamangala University of Technology Isan Khonkaen Campus></font><br  />
  <address>
  <a href="mailto:#">kkc@gmail.com</a>
  </address>
</footer>
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
