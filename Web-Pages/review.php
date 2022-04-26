<?php session_start();
if(!isset($_SESSION["userName"]))
{
	header('Location:loginpg.php');
}
?>
<!doctype html>
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>REVIEW-DRESS WORLD</title>
<link rel="stylesheet" type="text/css" href="CSS/reviewStyle.css" />
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
</head>
<body>
	<header><img src="Images/logo.png" alt="" class="logo">
	<nav>
		<ul class="nav-area">
		<li><a href ="Home.html">HOME</a></li>
		<li><a href="Men.php">MEN</a></li>
		<li><a href="Women.php">WOMEN</a></li>
		<li><a href="review.php">REVIEW</a></li>
		<div class="dropdown"><li><a href="#about"><i class="fa fa-user" style="font-size:36px"></i></a>
		<div class="dropdown-content">
		  <a href="loginpg.php">Login</a>
		  <a href="myprofile.php">My Profile</a>
		  <a href="myOrder.php">My Orders</a>
		  <a href="viewReview.php">All Reviews</a>
		  <a href="logoutsession.php">Logout</a>
    	</div></li> </div>
		<li><a href="cart.php"><i class="fa fa-shopping-bag" style="font-size:36px;"></i></a></li>
		</ul>
	  </nav>
	</header>  
	<div class="titlecontainer">
		  <p>Reviews</p>
		</div><br><br>
	<div class="container1">		
			 <img src="Images/review.jpg">
		</div><br><br><br>
<form action="review.php" method="post" enctype="multipart/form-data">
<table width="925">
	    
	   <tr>
        <td width="260" height="44">Product Name</td>
        <td width="653"><p>&nbsp;
          </p>
          <p>
            <input type="text" name="txtProNAme" id="txtProNAme" required/>
          </p>
         <p>&nbsp; </p></td>
  </tr>
      <tr>
        <td>Images of Product</td>
        <td><p>&nbsp;
          </p>
          <p>
            <input type="file" name="fileImage" id="fileImage" required/>
          </p>
        <p>&nbsp; </p></td>
      </tr>
      <tr>
        <td>Description</td>
        <td><p>&nbsp;
          </p>
          <p>
            <textarea name="txtdesc" id="txtdesc"></textarea>
          </p>
        <p>&nbsp; </p></td>
      </tr>
     
				<?php
			 if(isset($_POST["btnSubmit"]))
			 {
				 $name= $_POST["txtProNAme"];
				 $image="uploads/".basename($_FILES["fileImage"]["name"]);
				 move_uploaded_file($_FILES["fileImage"]["tmp_name"],$image);
				 $date=date('Y-m-d');
		         $time=date("h:i:sa");
				 $description=$_POST["txtdesc"];
				 
				 $con=mysqli_connect("localhost","root","","dressworld");
		   
		   		if(!$con)
				{
					die("Cannot connnect to the DB server");	
				}
				 
				 
				 $sql="INSERT INTO `review`(`rewID`, `email`, `proName`, `description`, `date`, `time`, `path`) VALUES (NULL, '".$_SESSION["userName"]."', '".$name."', '".$description."', '".$date."', '".$time."', '".$image."');";
				 
				 if(mysqli_query($con,$sql))
				 {
					 echo "Thank you for your review!";
				 }
				 else
				 {
					echo "Something went wrong";	 
				 }		  
			 }
			?>		  
      <tr>
        <td colspan="2">
        
             &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
             <p>&nbsp;</p>
             <p>
               <input name="btnSubmit" type="submit" class="button" id="btnSubmit" value="Add Now"   />
               <input name="btnReset" type="reset" class="button" id="btnReset" value="Cancel"   />
          </p>
         
        </td>
  </tr>
</table>
</form>	
	<br><br><br><br><br><br><br><br><br>
	<div class="footer">
		<br>
		<div class="social"><a href="#"><i class="fa fa-instagram"></i></a><a href="#"><i class="fa fa-snapchat-ghost"></i></a><a href="#"><i class="fa fa-twitter"></i></a><a href="#"><i class="fa fa-facebook"></i></a></div><br><br>
		<h3>Dress World</h3>
		<p class="o">Our company is completely creative, clean & 100% responsive website. Put your business into next level with us.
		It includes rich features & contents. It's designed & developed based on One Page/ Multi-page Layout,blog themes,world press themes and blogspot. You can use any layout from any demo anywhere.<br>
		<br>
		<a class="a1" href="contact.php">Contact us</a> | <a class="a1" href="about.php">About us</a><br>
		</p>
		<p class="t">Copyright @2017 | Designed With by DRESS WORLD</p>
</div>
</body>
</html> 
