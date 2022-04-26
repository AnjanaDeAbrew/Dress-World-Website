<?php session_start(); ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>ACCOUNT-DRESS WORLD</title>
    <link rel="stylesheet" href="CSS/loginStyle.css">
		<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
</head>
<body>
	<header><img src="Images/logo.png" alt="" class="logo">
	
	</header>  
			
<table width="955" height="692" border="0" align="center">
          <tbody>
            <tr>
              <td width="540" height="686" align="center">&nbsp;<div class="loginBox">
   
      
				
				<h1>Welcome back,</h1>
 <form action="loginpg.php" method="post">
	  <p>&nbsp;</p>
          <p>&nbsp;</p>
            <p>
              <input type="text" name="txtuname" id="txtuname" placeholder="Enter your Email">
            </p>
          <p>&nbsp; </p>
            <p>
              
              <input type="password" name="txtpassword" id="txtpassword" placeholder="**************" minlength="8" maxlength="16">
            </p>
    <p><a href="signuppage.php"> Forgot Password?</a></p>
    <p>&nbsp;</p>
    <p>&nbsp;</p>
    <p>&nbsp;</p>
    <p>&nbsp;</p>
        <p>
			
              <input type="submit" name="btnsubmit" id="btnsubmit" value="LOG IN">
    </p>
    <?php
				if(isset($_POST["btnsubmit"]))
				{
					$username = $_POST["txtuname"];
					$password = $_POST["txtpassword"];
					
					$valid=false;
					$con=mysqli_connect("localhost","root","","dressworld");
					
					if(!$con)
					{
						die("Cannot connnect to the DB server");	
					}
					
					$sql="SELECT * FROM `customer` WHERE `email`='".$username."' AND `password`='".$password."'";
					$result=mysqli_query($con,$sql);
					
					if(mysqli_num_rows($result)>0)
					{
						$valid=true;
					}

					else
					{
						$valid=false;
					}
					if($valid)
					{
						$_SESSION["userName"]=$username;
						header("Location:Home.html");
					}
					else
					{
						echo "Please enter corect username and password";
					}
				}
				
				  
				?>
	  
              
    </form>
    </div>
              <p>&nbsp;</p>
              <p>&nbsp;</p></td>
              <div class="sd"><td width="405" align="center" valign="top" background="Images/bg.jpg"></div>
			    <div class="text">New User?</div>
				  <br><div class="text2">Register and get a new experience</div>
			  <span class="sign"><a class="act" href="signuppage.php" >SIGN UP</a></span></td>
            </tr>
          </tbody>
</table>
     

</body>
	


</html>