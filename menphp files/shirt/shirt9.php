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
<title>Men Fashion</title>
	<link rel="stylesheet" type="text/css" href="../../CSS/PageStyle.css">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
</head>

<body>
<header><img src="../../Images/logo.png" alt="" class="logo">
	<nav>
		<ul class="nav-area">
		<li><a href="../shirt.php"><button class="btn2"><i class="fa fa-angle-left"></i> Previous </button></a></li>	
		<li><a href="../../Home.html">Home</a></li>
		<li><a href="../../Men.php">MEN</a></li>
		<li><a href="../../Women.php">WOMEN</a></li>
		<li><a href="../../about.php">About</a></li>
		<div class="dropdown"><li><a href="#about"><i class="fa fa-user" style="font-size:36px"></i></a>
		<div class="dropdown-content">
		  <a href="../../loginpg.php">Login</a>
		  <a href="../../myprofile.php">My Profile</a>
		  <a href="../../myOrder.php">My Orders</a>
		  <a href="../../logoutsession.php">Logout</a>
    	</div></li> </div>
		<li><a href="../../cart.php"><i class="fa fa-shopping-bag" style="font-size:36px;"></i></a></li>
		</ul>
  </nav>
</header><form action="shirt9.php" method="post" enctype="multipart/form-data">
	 <table width="675" height="507" border="0">
		  <tbody>
		    <tr>
		      <td rowspan="6"><img src="../../Images/Men/shirts/200545147-1-khaki.jfif"></td>
		      <td><p class="one">New Look long sleeve poplin shirt in khaki</p></td>
	        </tr>
		    <tr>
		      <td><p class="two">Rs. 2400</p></td>
	        </tr>
		    <tr>
		      <td><p class="three">COLOR: Khaki</p></td>
	        </tr>
		    <tr>
		      <td><p class="three">SIZE
				<select name="select" id="select">
				<option value="select placeholder" selected="selected">Select size</option>
				<option value="small">S</option>
				<option value="medium">M</option>
				<option value="large">L</option>
				<option value="xl">XL</option>
          </select></p></td>
	        </tr>
		    <tr>
		      <td><label for="number"><p class="three">Count:</label>
              <input type="number" name="number" id="number" min="1" max="10"></p></td>
	        </tr>
		    <tr>
		      <td><input type="submit" name="submitbtn" id="submitbtn" value="ADD TO CART"></td>
	        </tr>
	      </tbody>
<?php
			 if(isset($_POST["submitbtn"]))
			 {
				 $proname="New Look long sleeve poplin shirt in khaki";
				 $price=2400;
				 $color="Khaki";
				 $select=$_POST["select"];
				 $count=$_POST["number"];	 
				 
				  $con=mysqli_connect("localhost","root","","dressworld");
		   
		   		if(!$con)
				{
					die("Cannot connnect to the DB server");	
				}
				 
				 
				 $sql="INSERT INTO `cart` (`cartID`, `proName`, `email`, `color`, `total`, `amount`, `size`) VALUES (NULL, '".$proname."', '".$_SESSION["userName"]."', '".$color."', '".$price."', '".$count."', '".$select."');";
				 if(mysqli_query($con,$sql))
				 {
					 echo "Product is successfully added to cart!!";
				 }

			 }
			?>
	</table>
	</form>
</body>
</html>