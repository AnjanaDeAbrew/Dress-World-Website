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
<title>Women Fashion</title>
	<link rel="stylesheet" type="text/css" href="../../CSS/PageStyle.css">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
</head>

<body>
<header><img src="../../Images/logo.png" alt="" class="logo">
	<nav>
		<ul class="nav-area">
		<li><a href="../shoe.php"><button class="btn2"><i class="fa fa-angle-left"></i> Previous </button></a></li>	
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
</header><form action="shoe3.php" method="post" enctype="multipart/form-data">
	 <table width="675" height="507" border="0">
		  <tbody>
		    <tr>
		      <td rowspan="6"><img src="../../Images/Women/Shoe/200372443-1-silver.jfif"></td>
		      <td><p class="one">Nina embellished strappy tie leg heeled sandals in silvery</p></td>
	        </tr>
		    <tr>
		      <td><p class="two">Rs. 4700</p></td>
	        </tr>
		    <tr>
		      <td><p class="three">COLOR: Silver</p></td>
	        </tr>
		    <tr>
		      <td><p class="three">SIZE
				<select name="select" id="select">
				<option value="select placeholder" selected="selected">Select size</option>
				<option value="US 4">US 4</option>
				<option value="US 5">US 5</option>
				<option value="US 6">US 6</option>
				<option value="US 7">US 7</option>
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
				 $proname="Nina embellished strappy tie leg heeled sandals in silvery";
				 $price=4700;
				 $color="Silver";
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
