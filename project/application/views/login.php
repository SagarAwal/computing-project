<html>
<head>LOGIN</head>
<body>
	 <div class="login-card">
    <h1>Log-in</h1><br>
  <form action="<?php echo base_url();?>Customer/Login" method="post">
    <input type="text" name="user" placeholder="Username">
    <input type="password" name="pass" placeholder="Password">
    <input type="submit" name="login" class="login login-submit" value="login">
  </form>
    
  <div class="login-help">
    <a href="<?php echo base_url('index.php/Welcome/registration')?>">Register</a> • <a href="#">Forgot Password</a>
  </div>
</div>
</body>
</html>

