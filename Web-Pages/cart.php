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
<title>CART-DRESS WORLD</title>
	<link rel="stylesheet" type="text/css" href="CSS/cartStyle.css">
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
		  <p>Shopping Cart</p>
		</div><br><br>
            <table width="512" border="1">
			<tr class="tr1" height="50">
			 <td class="td1">Product Name</td>
			 <td class="td1">Color</td>
			 <td class="td1">Size</td>
			 <td class="td1">Quantity</td>
			 <td class="td1">Total</td>
				
			 </tr>
				<?php
				 $con=mysqli_connect("localhost","root","","dressworld");
		   $subtotal=0;
				   if(!$con)
					{
						die("Cannot connnect to the DB server");	
					}
				$sql="SELECT * FROM `cart` WHERE `email`='".$_SESSION["userName"]."'";
				$result=mysqli_query($con,$sql);
				
				if(mysqli_num_rows($result)>0)
				{
					while($row=mysqli_fetch_assoc($result))
					{
						$totalprice=$row["total"]*$row["amount"];
						
						$subtotal=$subtotal+$totalprice;
				echo "
			  <tr>
				  <td>".$row["proName"]."</td>
				  <td>".$row["color"]."</td>
				  <td>".$row["size"]."</td>
                <td>".$row["amount"]."</td>
                <td>".$totalprice."</td>
				<td ><a class='a1' href='deleteContent.php?id=".$row["cartID"]."'>Remove </a></td>
              </tr> ";
					}
					echo "<tr class='tr1'><td class='td1'>TOTAL TO PAY is Rs.$subtotal</td></tr>";
				}
				
				?>
				&nbsp;
            </table>
	<div class="container1">
	  <a href="payment.php"><button class="btn3">CHECK OUT</button></a>
		</div><br><br>
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
