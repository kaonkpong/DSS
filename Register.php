<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>DSS Register</title>
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
body{
  width:100%;
  height:100%;
  background:url(img/bg3.jpg)center center no-repeat;
  background-size: cover ;
}

     </style>


<link href="TwitterLogin/front.css" media="screen, projection" rel="stylesheet" type="text/css">
</head>
<body > 

<div class="navbar navbar-inverse">
  <div class="navbar-inner" style="-webkit-border-radius: 0; -moz-border-radius: 0; border-radius: 0;">
    <div class="container">
      <a class="btn btn-navbar" data-toggle="collapse" data-target=".nav-collapse">
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </a>
      <a class="brand" href="#">DSS</a>
      
          
      <div class="nav-collapse pull-right">
        <ul class="nav">
       
        
      
  <div id="topnav" class="topnav"><font color="#666666"> Have an account?</font> <a href="login" class="signin"><span>Sign in</span></a> </div>
  
  <fieldset id="signin_menu">
    <form method="post" id="signin" action="">
      <label for="username">Username or email</label>
      <input id="username" name="username" value="" title="username" tabindex="4" type="text">
      </p>
      <p>
        <label for="password">Password</label>
        <input id="password" name="password" value="" title="password" tabindex="5" type="password">
      </p>
      <p class="remember">
        <input id="signin_submit" value="Sign in" tabindex="6" type="submit">
        <input id="remember" name="remember_me" value="1" tabindex="7" type="checkbox">
        <label for="remember">Remember me</label>
      </p>
      <p class="forgot"> <a href="#" id="resend_password_link">Forgot your password?</a> </p>
      <p class="forgot-username"> <A id=forgot_username_link 
title="If you remember your password, try logging in with your email" 
href="#">Forgot your username?</A> </p>
    </form>
  </fieldset>

        
         <!-- <li class="dropdown ">
            <a href="#" class="dropdown-toggle" data-toggle="dropdown">Sign in <b class="caret"></b></a>
            <ul class="dropdown-menu">
              <li><a href="#">Action</a></li>
              <li><a href="#">Another action</a></li>
            </ul>
          </li>-->
        </ul>
        
      </div><!-- /.nav-collapse -->
    </div><!-- /.container -->
  </div><!-- /.navbar-inner -->
</div><!-- /.navbar -->
                     
                   

<div class="container">
      <div class="row-fluid">
 <div class="span6"></div><div class="span6"></div>
		
        <div class="span6 "><br /><br />
       
        <br />
<h2>Welcome to Decision System InternShip KKC.</h2>
join Us Right now!

</div>




       
            
            
            <div class="span4">
                  <form action="" method="post">
        <table width="500"  class="table table-hover">
                      <tbody>
            <tr>
                          <td width="20%"><label class="control-label">บัญชีผู้ใช้</label>
                <input type="text" id="txtEmail" placeholder="Email" required></td>
                          <td></td>
                        </tr>
            <tr>
                          <td><label class="control-label" >Password</label>
                <input type="password" id="txtPassword" placeholder="Password" required></td>
                          <td></td>
                        </tr>
            <tr>
                          <td><label class="control-label" for="input">ชื่อ</label>
                <input type="text" id="txtName" placeholder="Name"></td>
                          <td ><label class="control-label" for="input">นามสกุล</label>
                <input type="text" id="txtLastName" placeholder="LastName"></td>
                        </tr>
            <tr>
                          <td><label class="radio">
   <input type="radio" name="Gender"  value="man">
   <span class="metro-radio">เพศชาย</span>
</label></td>
                          <td><label class="radio">
   <input type="radio" name="Gender"  value="woman">
   <span class="metro-radio">เพศหญิง</span>
</label></td>
                        </tr>
            <tr>
                          <td><label class="control-label" for="Major">สาขา</label>
                <select class="span6">
                              <option value="BIS">BIS</option>
                              <option value="AC">AC</option>
                              <option value="BMG">BMG</option>
                              <option value="BMK">BMK</option>
                            </select></td>
                          <td></td>
                        </tr>
            <tr>
                          <td><label class="control-label" for="input">โทรศัพท์</label>
                <input type="text" id="txtPhone" placeholder="Phone"></td>
                          <td>&nbsp;</td>
                        </tr>
            <tr>
                          <td><button type="submit" class="btn btn-primary" >Send</button></td>
                          <td>&nbsp;</td>
                        </tr>
          </tbody>
                    </table>
      </form>
                </div>
      
                                
                    
      </div>
   </div>
       <script src="TwitterLogin/javascripts/jquery.js" type="text/javascript"></script>
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
					$(".signin").removeClass("menu-open");
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
                    
                               
                                        
                               
                        <footer >
            <hr />
            <div class="text-center">      
               
                   <a href="index.php">หน้าแรก</a> &nbsp;&nbsp;
                 <a href="Main.php">ค้นหา</a>&nbsp;&nbsp;
                 <a href="login.php">บัญชีผู้ใช้</a>&nbsp;&nbsp;
                 <a href="#">เกี่ยวกับเรา</a>
                  <br />
                &copy;2013 Decision Support Systems Internship kkc 
                Rajamangala University of Technology Isan Khonkaen Campus<br  />
                <address>
                
                   <a href="mailto:#">kkc@gmail.com</a>
                </address>
           </div>
            </footer>
                        
                        
                  
  
    
 
  
  <script src="Bootmetro/js/jquery-1.10.0.min.js"></script> <!-- DROP DOWN -->
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