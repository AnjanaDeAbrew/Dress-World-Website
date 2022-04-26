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
<title>ALL REVIEWS-DRESS WORLD</title>
<link rel="stylesheet" type="text/css" href="CSS/viewReviewStyle.css" />
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
		  <p>All Reviews</p>
	</div><br><br><br>
	<table width="512" border="1">
			<tr class="tr1" height="50">
			 <td class="td1">Image</td>
			 <td class="td1">Product Name</td>
			 <td class="td1">Description</td>
			 <td class="td1">Date</td>
			 <td class="td1">Time</td>
			 <td class="td1">Email</td>
			 </tr>
	<?php
	
	 $con=mysqli_connect("localhost","root","","dressworld");
					 
		if(!$con)
		{
			die("Cannot connect to DB Server");
		}
	
	 $sql="SELECT * FROM `review`";
	 $result=mysqli_query($con,$sql);
	 if(mysqli_num_rows($result)>0)
				{
					while($row=mysqli_fetch_assoc($result))
					{
							echo "
							  <tr>
								  <td><img src='".$row["path"]."' width='100' height='100'></td>
								  <td>".$row["proName"]."</td>
								  <td>".$row["description"]."</td>
								  <td>".$row["date"]."</td>
								  <td>".$row["time"]."</td>
								  <td>".$row["email"]."</td>
							  </tr> ";
	 	}
	}
	?>
		</table>
	<br><br><br>
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
