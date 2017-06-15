<!DOCTYPE HTML>
<html>
<head> 
<title>Registration Form</title>
	
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
</head>
<script type="text/javascript">
	function valid(){
		if(form.cPassword.value == ""){
			alert("Enter the password");
			return false;
		}
		if((form.cPassword.value).length <6){
			alert("Password should be minimum 6 character");
			return false;
		}
		if(form.crPassword.value == ""){
			alert("Enter the configuration password.");
			return false;
		}
		if(form.crPassword.value != form.cPassword.value){
			alert("Password didnot matched.");
			return false;
		}
		else{
		alert("Password match");
		header("refresh:5; url=<?php echo base_url();?>Welcome/registration");
		return false;
		}
	return true;
	}
</script>
<body>
      <form action="<?php echo base_url();?>customer/getRegister/" method="post">
      
        <h1>Registration Form</h1>
        
        <fieldset>
          
          <input type="text" id="firstname" name="firstname" placeholder="Enter firstname" required>
		  
          <input type="text" id="lastname" name="lastname" placeholder="Enter lastname"required>
		  
	     <input type="text" id="address" name="address" placeholder="Enter Address"required>
		  
         
         <input type="email" id="mail" name="email" placeholder="Enter email"required>
		  
		 
          <input type="text" id="contactno" name="contactno" placeholder="Enter phone number"required>
		  
          <input type="text" id="username" name="username" placeholder="username"required>
          
         
          <input type="password" id="password" name="password" placeholder="password" required>
          
        </fieldset>
        
      
        <button type="submit">Register</button>
      </form>
      

</body>
</html>
