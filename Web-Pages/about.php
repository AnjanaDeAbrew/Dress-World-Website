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
<title>ABOUT-DRESS WORLD</title>
	<link rel="stylesheet" type="text/css" href="CSS/AboutStyle.css">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
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
		  <p>ABOUT DRESS WORLD</p>
		</div><br><br><br><br>
		<div class="container1">		
			 <img src="Images/about.jpg">
		</div><br><br><br><br>
	<div class="container2"><p>Who we are</p>
		</div><br><br><br><br>
	<div class="container3"><p>We believe in a world where you have total freedom to be you, without judgement. To experiment. To express yourself. To be brave and grab life as the extraordinary adventure it is. So we make sure everyone has an equal chance to discover all the amazing things they’re capable of – no matter who they are, where they’re from or what looks they like to boss. We exist to give you the confidence to be whoever you want to be.</p>
		</div><br><br><br><br><br><br><br>
	<div class="container4">		
			 <img src="Images/we.PNG">
	</div><br><br><br><br>
	<div class="container2"><p>Choice for all</p>
		</div><br><br><br><br>
	<div class="container3"><p>Our audience (AKA you) is wonderfully unique. And we do everything we can to help you find your fit, offering our DRESS WORLD Brands in more than 30 sizes – and we're committed to providing all sizes at the same price – so you can be confident we’ve got the perfect thing for you. We’re also proud to partner with GLAAD, one of the biggest voices in LGBTQ activism, on a gender-neutral collection to unite in accelerating acceptance.</p>
		</div><br><br><br><br><br><br><br>
	<div class="container4">		
			 <img src="Images/choice.PNG">
		</div><br><br><br><br>
	<div class="container2"><p>DESIGN WORLD Marketplace</p>
		</div><br><br><br><br>
	<div class="container3"><p>You know that satisfying feeling when you stumble across an incredible vintage boutique, or uncover an amazing independent brand, before everyone else? Yeah, we love that too. That’s why we created DRESS WORLD Marketplace in 2010. The team seeks out the best fashion start-ups and it’s now home to more than 700 boutiques – so you can shop one-of-a-kind finds all the time.</p>
		</div><br><br><br><br><br><br>
	<div class="container4">		
			 <img src="Images/market.PNG">
		</div><br><br><br><br>
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
