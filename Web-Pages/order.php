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
<title>ORDER</title>
	<link rel="stylesheet" type="text/css" href="CSS/oderStyle.css">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
</head>
<body>
	<header><img src="Images/logo.png" alt="" class="logo">
	<nav>
		<ul class="nav-area">
		<li><a href ="Home.html">HOME</a></li>
		<li><a href="Men.php">MEN</a></li>
		<li><a href="Women.php">WOMEN</a></li>
		<div class="dropdown"><li><a href="#about"><i class="fa fa-user" style="font-size:36px"></i></a>
		<div class="dropdown-content">
		  <a href="loginpg.php">Login</a>
		  <a href="myprofile.php">My Profile</a>
		  <a href="myOrder.php">My Orders</a>
		  <a href="logoutsession.php">Logout</a>
    	</div></li> </div>
		<li><a href="cart.php"><i class="fa fa-shopping-bag" style="font-size:36px;"></i></a></li>
		</ul>
	  </nav>
	</header>  
	<div class="titlecontainer">
		  <p>Order Confirmation</p>
		</div><br><br>
	
	<?php
	
	 $con=mysqli_connect("localhost","root","","dressworld");
					 
		if(!$con)
		{
			die("Cannot connect to DB Server");
		}
	
	 $sql = "SELECT * FROM `order`";
	 $sql1 = "SELECT * FROM `customer` WHERE `email`='".$_SESSION["userName"]."'";
	 $sql2 = "SELECT `Payment date` FROM `payment` WHERE `email`='".$_SESSION["userName"]."'";
		$result = mysqli_query($con,$sql);
		$result1 = mysqli_query($con,$sql1);
	    $result2 = mysqli_query($con,$sql2);
		if(mysqli_num_rows($result)>0||mysqli_num_rows($result1)>0||mysqli_num_rows($result2)>0)
		{
				$row=mysqli_fetch_assoc($result);
			    $row1=mysqli_fetch_assoc($result1);
			    $row2=mysqli_fetch_assoc($result2);

?>
<div class="container1">
		  <img src="Images/download.png">
		</div><br><br>
	<div class="container2">
	  <p>Thank You For Your Order!</p>
</div><br><br>
<table>
	    
	   
         <td width="146"><p class="one">Order ID</p></td>
          <td class="td2" width="377"><input type="text" name="txtFullName" id="txtFullName" value="<?php echo $row["orderID"];?>" readonly/></td>
	   <tr>
          <td width="146"><p class="one">Ordered Date</p></td>
           <td class="td2" width="377"><input type="text" name="txtEmail" id="txtEmail" value="<?php echo $row2["Payment date"];?>" readonly/></td>
	   </tr>
	   <tr>
           <td width="146"><p class="one">Delivery Address</p></td>
           <td class="td2" width="377"><input type="text" name="txtContact" id="txtContact" value="<?php echo $row1["address"];?>" readonly/></td>
	   </tr>
	<tr>
           <td width="146"><p class="one">Contact Number</p></td>
           <td class="td2" width="377"><input type="text" name="txtContact" id="txtContact" value="<?php echo $row1["phoneNo"];?>" readonly/></td>
	   </tr>
     </table>
	<?php
			   }
		 	mysqli_close($con);
		?>
	<div class="container3">
	  <a href="Home.html"><button class="btn2"><i class="fa fa-angle-left"></i>     Countinue Shopping</button></a>
</div><br><br>
	
</body>
</html> 
