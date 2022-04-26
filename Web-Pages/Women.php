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
<title>WOMEN FASHION</title>
	<link rel="stylesheet" type="text/css" href="CSS/WomenStyle.css">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
</head>

<body>
	<header><img src="Images/logo.png" alt="" class="logo">
	<nav>
		<ul class="nav-area">
		<li><a href="Home.html">HOME</a></li>
		<li><a href="Men.php">MEN</a></li>
		<li><a href="Women.php">WOMEN</a></li>	
		<li><a href="about.php">ABOUT</a></li>
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
	
		<div class="container1">		
			 <img src="Images/women fashion.jpg">
		</div><br><br>
	<div class="container2"><p>CATEGORIES</p>
		</div><br><br>
<div class="container3">		
		  &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; <a href="womenphp files/dress.php"><img src="Images/Women/dress.PNG"></a>
		   <a href="womenphp files/top.php"><img src="Images/Women/tops.PNG"></a>
		   <a href="womenphp files/pants.php"><img src="Images/Women/pasnts.PNG"></a>
		   <a href="womenphp files/skirt.php"><img src="Images/Women/skirts.PNG"></a>
		   <a href="womenphp files/shoe.php"><img src="Images/Women/foot.PNG"></a>
		</div><br><br><br><br><br><br>
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
