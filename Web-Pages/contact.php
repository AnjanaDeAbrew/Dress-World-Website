<?php session_start();
if(!isset($_SESSION["userName"]))
{
	header('Location:loginpg.php');
}
?>
<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>CONTACT-DRESS WORLD</title>
	<link rel="stylesheet" type="text/css" href="CSS/contactStyle.css">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
</head>
<script type="text/javascript">

	
function print()
{
	alert("Thnaks for your feedback!!");
}
</script>	
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
		  <p>CONTACT-US</p>
		</div><br><br><br><br>
		<div class="container1">		
			 <img src="Images/contact.jpg">
		</div><br><br><br><br>
<div class="row">
    <form action="contact.php" method="post">
      <p>
          <label for="fname">Full Name</label>
          <input type="text" id="fname" name="fname" placeholder="Your name..">
          <label for="nuumber">Contact Number</label>
          <input type="text" id="txtNumber" name="txtNumber" placeholder="Phone number.." pattern="[0-9]{10}" required>
          <label for="country">Country</label>
          <input type="text" id="txtcountry" name="txtcountry" placeholder="Sri Lanka..">
          <label for="subject">Comment</label>
          <textarea id="txtComment" name="txtComment" placeholder="Write something.." style="height:170px"></textarea>
        </p>
      <p>&nbsp;  	</p>
      <p>
        <input type="submit" name="btnsubmit" id="btnsubmit" value="Submit" onClick="print()">
        </p>
    </form>
  </div>
<br><br>
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
	<?php
	   if(isset($_POST["btnsubmit"]))
	   {
		   $fullname=$_POST["fname"];
		   $contact=$_POST["txtNumber"];
		   $country=$_POST["txtcountry"];
		   $comment=$_POST["txtComment"];
		   $date=date('Y-m-d');
		   $time=date("h:i:sa");
		   $con=mysqli_connect("localhost","root","","dressworld");
		   
		   if(!$con)
			{
				die("Cannot connnect to the DB server");	
			}
					
			$sql="INSERT INTO `comment` (`commentID`, `fullname`, `contact`, `email`, `country`, `description`, `date`, `time`) VALUES (NULL, '".$fullname."', '".$contact."', '".$_SESSION["userName"]."', '".$country."', '".$comment."', '".$date."', '".$time."');";
			mysqli_query($con,$sql);
					
	   }
	?>
</html>
