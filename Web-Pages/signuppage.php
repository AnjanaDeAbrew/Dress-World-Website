<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>ACCOUNT-DRESS WORLD</title>
<link rel="stylesheet" type="text/css" href="CSS/signupStyle.css" />
<meta name="viewport" content="width=device-width, initial-scale=1.0">
</head>
	

<script type="text/javascript">

	
function validateEmail()
{
	var email = document.getElementById("txtEmail").value;
	var at=email.indexOf("@");
	var dt = email.lastIndexOf(".");
	var len = email.length;
	-
	if((at<2) || (dt - at < 2) || (len - dt < 2))
		{
			alert("Please enter valid email address");
			return false;
		}
	
	return true;
}
	
	
	
function validatePassword()
	{
		var password = document.getElementById("txtPassword").value;
		var Cpassword= document.getElementById("txtCPassword").value;
		
		if((password != Cpassword))
			{
				alert("Confirm password not match with password");
				return false;
			}
		return true;
	}
	
function validateAll()
	{
		if(validateEmail() && validatePassword() )
		{
			alert("Registered successfully");
		}
			
		else
		{
			event.preventDefault();
		}
	
	}
	
	

</script>
</head>
<body>
	<header><img src="Images/logo.png" alt="" class="logo">
	
	</header> 
<div class="container">
<form action="signuppage.php" method="post">
  <table width="729" height="807" border="0" align="center">
    <tbody>
      <tr>
        <td colspan="2"></td>
      </tr>
      <tr>
        <td height="89" colspan="2"><h2>SIGN UP WITH ..</h2>
          <p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<a href="https://accounts.google.com/" target="_blank"><img src="images/Screenshot (317).png" width="174" height="47" alt=""/></a>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;  &nbsp;<a href="https://appleid.apple.com/" target="_blank"><img src="images/Screenshot (315).png" width="167" height="48" alt=""/></a>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &nbsp;<a href="https://www.facebook.com/" target="_blank"><img src="images/Screenshot (316).png" width="180" height="49" alt=""/></a></p></td>
      </tr>
      <tr>
        <td height="53" colspan="2"><h2>OR SIGN UP WITH EMAIL</h2></td>
      </tr>
      <tr>

        <td width="663"><input type="text" name="txtFullName" id="txtFullName" placeholder="Enter Full name" required></td>
      </tr>
      <tr>
        
        <td><input type="text" name="txtEmail" id="txtEmail"  placeholder="Enter email address" required></td>
      </tr>
      <tr>
        
        <td><input name="txtPassword" type="password" required="required" id="txtPassword" minlength="8" maxlength="16" placeholder="Enter Password"></td>
      </tr>
      <tr>

        <td><input name="txtCPassword" type="password"  placeholder="Confirm password" required="required" id="txtCPassword" minlength="8" maxlength="16"></td>
      </tr>
      <tr>
  
        <td><textarea name="txtAddress" required="required" id="txtAddress"  placeholder="Enter your Address"></textarea></td>
      </tr>
      <tr>
        <td><p style="font-family: Segoe, 'Segoe UI', 'DejaVu Sans', 'Trebuchet MS', Verdana, sans-serif; color: #2E2E2E; text-align: center;">Date of Birth
            <input name="Bday" type="date" required="required" id="Bday" max="2100-12-31" min="1930=01-01">
          </p></td>
      </tr>
      <tr>
        
      </tr>
      <tr>
					<td><p>
					  <input name="txtContact" type="text" id="txtContact" placeholder="Contact number" pattern="[0-9]{10}">
	      </p></td>
      </tr>
      <tr>
        <td colspan="2"><p>&nbsp;</p>
          <p>
            <input type="submit" name="btnsubmit" id="btnsubmit" value="Submit" onClick="validateAll()">
            <input type="reset" name="btnreset" id="btnreset" value="Reset">
          </p>

      </tr>
    
    </tbody>
  </table>
	</form></div>
</body>
<?php
	   if(isset($_POST["btnsubmit"]))
	   {
		   $fullname=$_POST["txtFullName"];
		   $email=$_POST["txtEmail"];
		   $password=$_POST["txtPassword"];
		   $address=$_POST["txtAddress"];
		   $bdate=$_POST["Bday"];
		   $contact=$_POST["txtContact"];

		   $con=mysqli_connect("localhost","root","","dressworld");
		   
		   if(!$con)
			{
				die("Cannot connnect to the DB server");	
			}
					
			$sql="INSERT INTO `customer` (`fullname`, `email`, `password`, `phoneNo`, `address`, `date of birth`) VALUES ('".$fullname."', '".$email."', '".$password."', '".$contact."', '".$address."', '".$bdate."');";
			mysqli_query($con,$sql);
				header('Location:loginpg.php');
		   	
					
	   }
	?>
</html>
