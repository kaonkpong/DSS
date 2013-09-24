   <div id="topnav" class="topnav"><font color="#FCFCFC"> Admin Account</font> <a href="login" class="signin"><span>Sign in</span></a> </div>
<fieldset id="signin_menu">
    <form method="post" id="signin" action="checklogin.php">
      <label for="username">บัญชีผู้ดูแลระบบ</label>
      <input  id="txtUsername" name="txtUsername"  title="username" tabindex="4" type="text" placeholder="บัญชีผู้ดูแลระบบ"   required>
      </p>
      <p>
        <label for="password">รหัสผ่าน</label>
        <input id="txtPassword" name="txtPassword"  title="password" tabindex="5" type="password" placeholder="รหัสผ่าน"    required>
      </p>
      <p class="remember">
        <input id="signin_submit" value="Sign in" tabindex="6" type="submit">
        <input id="remember" name="remember" value="on" tabindex="7" type="checkbox">
        <label for="remember">Remember me</label>
      </p>
  
      
    </form>
  </fieldset>